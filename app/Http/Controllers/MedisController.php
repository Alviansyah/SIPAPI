<?php

namespace App\Http\Controllers;

use App\PemeriksaanModel;
use App\DiagnosisModel;
use App\SapiModel;
use App\Http\Controllers\PenyakitController;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class MedisController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showRekamMedisView() {
        $data['data'] = PemeriksaanModel::join('datasapi','datasapi.idSapi','pemeriksaan.idSapi')->where('pemeriksaan.status', 1)->get();
        return view('pages.medis.rekammedis', $data);
    }

    public function showListRekamMedis($id){
      $data['data'] = DiagnosisModel::join('pemeriksaan', 'diagnosis.idPemeriksaan', 'pemeriksaan.idPemeriksaan')->where('pemeriksaan.idSapi', $id)->select('diagnosis.*', 'pemeriksaan.*')->get();
      return response()->view('pages.medis.listrekammedis', $data);
    }

    public function viewDetailRekamMedis($id){
      $data = DiagnosisModel::join('pemeriksaan', 'diagnosis.idPemeriksaan', 'pemeriksaan.idPemeriksaan')->join('datasapi', 'pemeriksaan.idSapi', 'datasapi.idSapi')->where('idDiagnosis', $id)->first();
      $datagejala = explode(',', $data->gejala);
      $PENYAKIT_CONTROLLER = new PenyakitController();
      $gejala = $PENYAKIT_CONTROLLER->getGejalaData($datagejala);
      $kombinasigejala = $PENYAKIT_CONTROLLER->getKombinasiPenyakit($datagejala);
      $prediksi = $PENYAKIT_CONTROLLER->hitungPrediksiPenyakit($datagejala, $kombinasigejala);
      return response()->view('pages.medis.detailrekammedis', compact('data', 'gejala', 'prediksi'));
    }

    public function showForm() {
        return view('pages.medis.formmedis');
    }

    public function viewDiagnosis($id) {
        $data['diagnosis'] = DiagnosisModel::find($id);
        return view('pages.sapi.detaildiagnosis', $data);
    }

    public function viewHipotesis($id) {
        $data['hipotesis'] = HipotesisModel::where('idSapi', '=', $id)->get();
        return view('pages.medis.detailhipotesis', $data);
    }

    public function tambahHipotesis(Request $request) {
        $input = Validator::make($request->all(), ['idSapi' => 'required', 'tglHipotesis' => 'required', 'idGejala' => 'required']);
        if ($input->fails()){
            return back()->withErrors($input)->withInput();
        }
        $data = new HipotesisModel();
        $data->idSapi = $request->idSapi;
        $data->tglHipotesis = $request->tglHipotesis;
        $data->idGejala = $request->idGejala;
        $data->save();
        $request->session()->flash('message', 'Data hipotesis ditambahkan.');
        return redirect('/medis');
    }

    public function tambahDiagnosis(Request $request) {
        $input = Validator::make($request->all(), ['idPenyakit' => 'required', 'idSapi' => 'required', 'saran' => 'required']);
        if ($input->fails()){
            return back()->withErrors($input)->withInput();
        }
        $data = new DiagnosisModel();
        $data->idPenyakit = $request->idPenyakit;
        $data->idSapi = $request->idSapi;
        $data->saran = $request->saran;
        $data->save();
        $request->session()->flash('message', 'Data diagnosis ditambahkan.');
        return redirect('/medis');
    }

}
