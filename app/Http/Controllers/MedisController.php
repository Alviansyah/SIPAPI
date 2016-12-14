<?php

namespace App\Http\Controllers;

use App\HipotesisModel;
use App\DiagnosisModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class MedisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showRekamMedisView() {
        $data['medis'] = DiagnosisModel::join('penyakit','diagnosispenyakit.idPenyakit','=','penyakit.idPenyakit')->select('diagnosispenyakit.idDiagnosis','diagnosispenyakit.idSapi','penyakit.namaPenyakit','diagnosispenyakit.saran')->get();
        return view('pages.medis.rekammedis', $data);
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
