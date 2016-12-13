<?php

namespace App\Http\Controllers;

use Auth;
use App\KombinasiModel;
use App\PemeriksaanModel;
use App\PenyakitModel;
use App\GejalaPenyakitModel;
use App\SapiModel;
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
      $gejala = implode(',',$request->get('gejala'));

      $data = new PemeriksaanModel();
      $data->idSapi = $request->get('idSapi');
      $data->gejala = $gejala;
      $data->idUser = Auth::user()->id;
      $data->save();
      $request->session()->flash('message','Entry pemeriksaan ID Sapi '.$request->get('idSapi').' ditambahkan.');
      return redirect('/pemeriksaan');
    }

    public function analisisDataPemeriksaan($id) {
      $data['dataset'] = PemeriksaanModel::join('users', 'pemeriksaan.idUser', 'users.id')->where('pemeriksaan.idPemeriksaan', $id)->select('pemeriksaan.*', 'users.name as petugas')->first();
      return response()->view('pages.penyakit.analisis', $data)
    }

    public function showDiagnosisView(){
        $data['gejala'] = GejalaPenyakitModel::all();
        return response()->view('pages.penyakit.diagnosis', $data);
    }

    public function showDaftarPenyakit(){
        $data['data'] = PenyakitModel::all();
        return response()->view('pages.penyakit.daftarpenyakit', $data);
    }

    public function hitungProbabilitasPenyakit(Request $request) {
      $datagejala = KombinasiModel::where(function($like) use ($data) {
        foreach ($data as $key => $value) {
          $like->orWhere('kombinasi', 'LIKE', $value);
        }
      })->get();
    }
}
