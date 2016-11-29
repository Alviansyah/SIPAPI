<?php

namespace App\Http\Controllers;

use App\PenyakitModel;
use App\GejalaPenyakitModel;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showDiagnosisProses(){
    	$data['gejala'] = GejalaPenyakitModel::all();
    	return view('pages.medis.diagnosisproses', $data);
    }

    public function diagnose(Request $request){
    	$input = Validation::make($request->all());
    	
    }
}
