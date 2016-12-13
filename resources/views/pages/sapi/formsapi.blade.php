@extends('main')

@section('title', 'SAPI')

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <h4 class="left-aligned">Form Data Sapi</h4>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <form action="{{ url(Session::get('state')) }}" method="POST">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <input id="idSapi" type="text" class="validate" name="idSapi" value="{{ $sapi->idSapi or '' }}" required>
                        <label for="idSapi">ID Sapi</label>
                    </div>
                </div>
                <div class="row">
                    @php
                        if (isset($sapi)) {
                            ($sapi->idKategori == 1) ? $pedet = "selected" : ($sapi->idKategori == 2 ? $dewasa = "selected" : $default = "selected");
                        }
                    @endphp
                    <div class="input-field col s12 m6 l6">
                        <select name="kategori" required>
                            <option value="" disabled {{ $default or '' }}>Pilih Kategori</option>
                            <option value="1" {{ $pedet or '' }}>Pedet</option>
                            <option value="2" {{ $dewasa or '' }}>Dewasa</option>
                        </select>
                        <label>Kategori Sapi</label>
                    </div>
                </div>
                <div class="row">
                    @php
                        if (isset($sapi)) {
                            ($sapi->jenisKelamin == 1) ? $pria = "selected" : ($sapi->jenisKelamin == 2 ? $wanita = "selected" : $default = "selected");
                        }
                    @endphp
                    <div class="input-field col s12 m6 l6">
                        <select name="jenisKelamin" required>
                            <option value="" {{ $default or '' }} disabled>Pilih Kelamin</option>
                            <option value="1" {{ $pria or '' }}>Jantan</option>
                            <option value="2" {{ $wanita or '' }}>Betina</option>
                        </select>
                        <label>Jenis Kelamin</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <input id="usia" type="text" class="validate" name="usia" value="{{ $sapi->usia or '' }}" required>
                        <label for="usia">Usia</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <input id="tinggi" type="text" class="validate" name="tinggi" value="{{ $sapi->tinggi or '' }}" required>
                        <label for="tinggi">Tinggi</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <input id="bobot" type="text" class="validate" name="bobot" value="{{ $sapi->bobot or '' }}" required>
                        <label for="bobot">bobot</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4 l4">
                        <button class="btn waves-effect waves-light" type="submit" name="btn_simpan">Simpan
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
