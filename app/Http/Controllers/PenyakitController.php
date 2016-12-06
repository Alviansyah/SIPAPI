<?php

namespace App\Http\Controllers;

use App\KombinasiModel;
use App\PemeriksaanModel;
use App\GejalaPenyakitModel;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPemeriksaanView(){
    	$data['gejala'] = PemeriksaanModel::all();
    	return response()->view('pages.penyakit.pemeriksaan', $data);
    }

    public function showDiagnosisView(){
        $data['gejala'] = GejalaPenyakitModel::all();
        return response()->view('pages.penyakit.diagnosis', $data);
    }

    public function showDiagnosisProses(){
        $data['gejala'] = GejalaPenyakitModel::all();
        return response()->view('pages.penyakit.diagnosisproses', $data);
    }

    public function viewEntryPemeriksaan($id){

    }

    public function hitungProbabilitasPenyakit(Request $request) {
        $dataPemeriksaan = implode("", $request->get('gejala'));
        $kombinasi = KombinasiModel::select('kombinasi')->where('kombinasi', $dataPemeriksaan)->first();
        
        $data['data'] = $dataPemeriksaan;
        return response()->view('pages.penyakit.test', $data);
    }
}
