@extends('main')

@section('title', 'Detail Sapi')

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="lower-a-bit">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h5 class="left-aligned bold"><b>Detail Data Sapi</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel cyan lighten-4">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    ID Sapi : {{ $sapi->idSapi or 'Empty'}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    Kategori : {{ $sapi->idKategori or 'Empty'}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    Jenis Kelamin : {{ $sapi->jenisKelamin or 'Empty'}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    Usia : {{ $sapi->usia or 'Empty'}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    Tinggi : {{ $sapi->tinggi or 'Empty'}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    Bobot : {{ $sapi->bobot or 'Empty'}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="waves-effect waves-light btn" href="/sapi">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection