<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\KombinasiModel;
use App\PemeriksaanModel;
use App\PenyakitModel;
use App\GejalaPenyakitModel;
use App\SapiModel;
use App\DiagnosisModel;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showPemeriksaanView(){
      $privilege = Auth::user()->level;
      switch ($privilege) {
        case 3:
          $datakategori = GejalaPenyakitModel::orderby('idKategoriGejala','asc')->select('idKategoriGejala')->distinct()->get();
          $DATA = array();
          $kategori = array();
          foreach ($datakategori as $row) {
            $kategori[] = $row->idKategoriGejala;
          }
          $DATA = $kategori;
          for ($i=0; $i < count($DATA); $i++) {
            $datagejala = GejalaPenyakitModel::where('gejalapenyakit.idKategoriGejala', $DATA[$i])->select('gejalapenyakit.idGejala', 'gejalapenyakit.gejala')->orderby('gejalapenyakit.idGejala', 'asc')->get();
            $datakategorigejala = GejalaPenyakitModel::join('kategorigejala','gejalapenyakit.idKategoriGejala','kategorigejala.idKategoriGejala')->where('gejalapenyakit.idKategoriGejala', $DATA[$i])->select('kategorigejala.kategoriGejala')->distinct()->first();
            $gejala = array('kategori' => $datakategorigejala->kategoriGejala);
            foreach ($datagejala as $row) {
              $temp = array();
              $temp[] = $row->idGejala;
              $temp[] = $row->gejala;
              $gejala[] = $temp;
            }
            $DATA[$i] = $gejala;
          }
          $gejaladata = $DATA;
          $datasapi = SapiModel::select('idSapi')->get();
          $sapidata = array();
          foreach ($datasapi as $sapidata2) {
            $sapidata[] = $sapidata2->idSapi;
          }
          return response()->view('pages.penyakit.pemeriksaanproses', compact('gejaladata', 'sapidata'));
          break;
        case 2:
          $data['data'] = PemeriksaanModel::join('users','pemeriksaan.idUser','users.id')->where('status', 0)->select('pemeriksaan.*', 'users.name as petugas')->get();
          return response()->view('pages.penyakit.pemeriksaan', $data);
          break;
        default:
          session()->flash('ERROR', 'gak ada data level terambil.');
          return redirect('/');
          break;
      }
    }

    public function tambahEntryPemeriksaan(Request $request){
      $input = Validator::make($request->all(), [
        'idSapi' => 'required',
        'gejala' => 'required'
      ]);
      if ($input->fails()){
          return back()->withErrors($input)->withInput();
      }
      $gejala = implode(',', $request->get('gejala'));
      $data = new PemeriksaanModel();
      $data->idSapi = $request->get('idSapi');
      $data->gejala = $gejala;
      $data->idUser = Auth::user()->id;
      $data->save();
      $request->session()->flash('message','Entry pemeriksaan ID Sapi '.$request->get('idSapi').' ditambahkan.');
      return redirect('/pemeriksaan');
    }

    public function analisisDataPemeriksaan($id) {
      $data = PemeriksaanModel::join('users', 'pemeriksaan.idUser', 'users.id')->where('pemeriksaan.idPemeriksaan', $id)->select('pemeriksaan.*', 'users.name as petugas')->first();
      $datagejala = explode(',', $data->gejala);
      $dataset = array('idPemeriksaan' => $data->idPemeriksaan, 'idSapi' => $data->idSapi, 'petugas' => $data->petugas);
      $gejala = $this->getGejalaData($datagejala);
      $kombinasigejala = $this->getKombinasiPenyakit($datagejala);
      $prediksi = $this->hitungPrediksiPenyakit($datagejala, $kombinasigejala);
      return response()->view('pages.penyakit.analisis', compact('dataset', 'gejala', 'prediksi'));
    }

    public function showDiagnosisView(){
      $data['data'] = DiagnosisModel::join('users', 'diagnosis.idDokter', 'users.id')->join('pemeriksaan', 'diagnosis.idPemeriksaan', 'pemeriksaan.idPemeriksaan')->select('diagnosis.*', 'users.name as dokter', 'pemeriksaan.idSapi')->get();
      return response()->view('pages.penyakit.diagnosis', $data);
    }

    public function viewDetailDiagnosis($id){
      $datadiagnosis = DiagnosisModel::join('users', 'diagnosis.idDokter', 'users.id')->join('pemeriksaan', 'diagnosis.idPemeriksaan', 'pemeriksaan.idPemeriksaan')->where('idDiagnosis', $id)->select('diagnosis.*', 'users.name as dokter', 'pemeriksaan.*')->first();
      $datagejala = explode(',', $datadiagnosis->gejala);
      $gejala = $this->getGejalaData($datagejala);
      $kombinasigejala = $this->getKombinasiPenyakit($datagejala);
      $prediksi = $this->hitungPrediksiPenyakit($datagejala, $kombinasigejala);
      // dd($datadiagnosis);
      return response()->view('pages.penyakit.detaildiagnosis', compact('datadiagnosis', 'gejala', 'prediksi'));
    }

    public function tambahDiagnosis(Request $request){
      $input = Validator::make($request->all(), [
        'idPemeriksaan' => 'required',
        'saran' => 'required'
      ]);
      if ($input->fails()){
          return back()->withErrors($input)->withInput();
      }
      $data = new DiagnosisModel();
      $data->idPemeriksaan = $request->idPemeriksaan;
      $data->saran = $request->saran;
      $data->idDokter = Auth::user()->id;
      $data->save();
      PemeriksaanModel::where('idPemeriksaan', $request->idPemeriksaan)->update(['status' => 1]);
      $request->session()->flash('message', 'Data diagnosis sapi ditambahkan.');
      return redirect('/pemeriksaan');
    }

    public function showDaftarPenyakit(){
        $data['data'] = PenyakitModel::all();
        return response()->view('pages.penyakit.daftarpenyakit', $data);
    }

    public function getGejalaData($DATA_GEJALA){
      $data = GejalaPenyakitModel::where(function($like) use ($DATA_GEJALA) {
        foreach ($DATA_GEJALA as $key => $value) {
          $like->orWhere('idGejala', 'LIKE', '%'.$value.'%');
        }
      })->get();
      $fixed = array();
      foreach ($data as $row) {
        $fixed[] = ['idGejala' => $row->idGejala, 'gejala' => $row->gejala];
      }
      return $fixed;
    }

    public function getKombinasiPenyakit($DATA_GEJALA) {
      $data = KombinasiModel::where(function($like) use ($DATA_GEJALA) {
        foreach ($DATA_GEJALA as $key => $value) {
          $like->orWhere('kombinasi', 'LIKE', '%'.$value.'%');
        }
      })->get();
      $fixed = array();
      foreach ($data as $row) {
        $fixed[] = ['idPenyakit' => $row->idPenyakit, 'kombinasi' => $row->kombinasi];
      }
      return $fixed;
    }

    public function hitungPrediksiPenyakit($DATA_GEJALA_INPUT, $DATA_KOMBINASI_GEJALA_PENYAKIT){
      $datapenyakitDB = PenyakitModel::select('namaPenyakit')->get();
      $numkombinasi = count($DATA_KOMBINASI_GEJALA_PENYAKIT);
      $numgejalainput = count($DATA_GEJALA_INPUT);
      $DATA_PREDIKSI = array();

      $penyakitDB = array();
      foreach ($datapenyakitDB as $row) {
        $penyakitDB[] = $row->namaPenyakit;
      }

      $kombinasigejalapenyakit = array();
      for ($i=0; $i < $numkombinasi; $i++) {
        $kombinasigejalapenyakit[] = explode(',', $DATA_KOMBINASI_GEJALA_PENYAKIT[$i]['kombinasi']);
      }

      $PREDIKSI = array();
      for ($i = 0; $i < $numkombinasi; $i++) {
        $num_exists = 0;
        for ($j=0; $j < $numgejalainput; $j++) {
          if (in_array($DATA_GEJALA_INPUT[$j], $kombinasigejalapenyakit[$i])) {
            $num_exists++;
          }
        }
        if ($num_exists >1 ) {
          $prediksi_penyakit = (($num_exists/$numkombinasi)*100);
          $prediksi_penyakit = number_format($prediksi_penyakit, 2);
          $PREDIKSI[] = ['Penyakit' => $penyakitDB[$i], 'prediksi' => $prediksi_penyakit];
        }
      }

      return $PREDIKSI;
    }

}
