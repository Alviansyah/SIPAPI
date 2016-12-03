<?php

namespace App\Http\Controllers;

use App\SapiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SapiController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function showSapiView(){
        $data['data'] = SapiModel::join('kategori','datasapi.idKategori','kategori.idKategori')->select('datasapi.*','kategori.kategori')->get();
        return view('pages.sapi.datasapi', $data);
    }

    public function showForm() {
        return view('pages.sapi.formsapi');
    }

    public function editDataSapi($id) {
        $data['sapi'] = SapiModel::find($id);
        return view('pages.sapi.formsapi', $data);
    }

    public function viewDataSapi($id) {
        $data['sapi'] = SapiModel::find($id);
        return view('pages.sapi.detailsapi', $data);
    }

    public function tambahDataSapi(Request $request) {
        $input = Validator::make($request->all(), ['idSapi' => 'required', 'kategori' => 'required', 'jenisKelamin' => 'required', 'usia' => 'required', 'tinggi' => 'required', 'bobot' => 'required']);
        if ($input->fails()){
            return back()->withErrors($input)->withInput();
        }
        $data = new SapiModel();
        $data->idSapi = $request->idSapi;
        $data->kategori = $request->kategori;
        $data->jenisKelamin = $request->jenisKelamin;
        $data->usia = $request->usia;
        $data->tinggi = $request->tinggi;
        $data->bobot = $request->bobot;
        $data->save();
        $request->session()->flash('message', 'Data sapi ditambahkan.');
        return redirect('/sapi');
    }

    public function updateDataSapi(Request $request, $id) {
        $input = Validator::make($request->all(), ['idSapi' => 'required', 'kategori' => 'required', 'jenisKelamin' => 'required', 'usia' => 'required', 'tinggi' => 'required', 'bobot' => 'required']);
        if ($input->fails()){
            return back()->withErrors($input)->withInput();
        }
        $data = SapiModel::find($id);
        $data->idSapi = $request->idSapi;
        $data->kategori = $request->kategori;
        $data->jenisKelamin = $request->jenisKelamin;
        $data->usia = $request->usia;
        $data->tinggi = $request->tinggi;
        $data->bobot = $request->bobot;
        $data->update();
        $request->session()->flash('message', 'Data sapi diubah.');
        return redirect('/sapi');
    }

    public function deleteDataSapi(Request $request, $id) {
        SapiModel::where('idSapi', $id)->update(['deleted' => 1]);
        $request->session()->flash('message', 'Data sapi dihapus.');
        return redirect('/sapi');
    }

}
