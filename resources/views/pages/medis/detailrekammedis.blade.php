@extends('main')

@section('title', 'Detail Rekam Medis')

@section('content')
  <div class="row">
      <div class="col s12 m12 l12">
          <h4 class="left-aligned">Detail Data Sapi</h4>
      </div>
  </div>
  <div class="row">
      <div class="col s12 m12 l12">
          <div class="card-panel white">
              <div class="row">
                  <div class="col s12 m12 l12">
                      ID Sapi : {{ $data->idSapi }}
                  </div>
              </div>
              <div class="row">
                  <div class="col s12 m12 l12">
                      Kategori : {{ $data->idKategori == 1 ? 'Pedet' : 'Dewasa' }}
                  </div>
              </div>
              <div class="row">
                  <div class="col s12 m12 l12">
                      Jenis Kelamin : {{ (($data->jenisKelamin == 1) ? 'Jantan' : 'Betina') }}
                  </div>
              </div>
              <div class="row">
                  <div class="col s12 m12 l12">
                      Usia : {{ $data->usia }} tahun
                  </div>
              </div>
              <div class="row">
                  <div class="col s12 m12 l12">
                      Tinggi : {{ $data->tinggi }} cm
                  </div>
              </div>
              <div class="row">
                  <div class="col s12 m12 l12">
                      Bobot : {{ $data->bobot }} kg
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h4 class="left-aligned">Diagnosis Penyakit</h4>
    </div>
  </div>
  <div class="row no-margin-bottom">
    <div class="col s12 m6 l6">
      <h6 class="left">ID Pemeriksaan : {{ $data->idPemeriksaan }} |</h6><h6 class="left">ID Sapi : {{ $data->idSapi}}</h6>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <p>Berikut gejala-gejala yang teridentifikasi berdasarkan pemeriksaan yang telah dilakukan.</p>
      <div class="card-panel white">
        @for($i = 0; $i < count($gejala); $i++)
          - {{ $gejala[$i]['gejala'] }}<br>
        @endfor
      </div>
      <p>Berikut prediksi penyakit yang mungkin diderita sapi dengan ID {{ $data->idSapi }}.</p>
      <div class="card-panel white">
        @for($i = 0; $i < count($prediksi); $i++)
          - {{ $prediksi[$i]['Penyakit'] }} : {{ $prediksi[$i]['prediksi'] }} %<br>
        @endfor
      </div>
      <p>Saran perawatan dari dokter {{ $data->idDokter }} untuk sapi dengan ID {{ $data->idSapi }}</p>
      <div class="card-panel white">
        <p>{{ $data->saran }}</p>
      </div>
    </div>
  </div>
@endsection
