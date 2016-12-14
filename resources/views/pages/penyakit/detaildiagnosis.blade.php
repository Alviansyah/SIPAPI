@extends('main')

@section('title', 'Diagnosis')

@section('content')
  <div class="row">
    <div class="col s12">
      <h4 class="left-aligned">Detail Diagnosis</h4>
    </div>
  </div>
  <div class="row no-margin-bottom">
    <div class="col s12 m6 l6">
      <h6 class="left">ID Pemeriksaan : {{ $datadiagnosis->idPemeriksaan }} |</h6><h6 class="left">ID Sapi : {{ $datadiagnosis->idSapi}}</h6>
    </div>
    <div class="col s12 m6 l6">
      <h6 class="right">Didiagnosis oleh : {{ $datadiagnosis->dokter }}</h6>
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
      <p>Berikut prediksi penyakit yang mungkin diderita sapi dengan ID {{ $datadiagnosis->idSapi }}.</p>
      <div class="card-panel white">
        @for($i = 0; $i < count($prediksi); $i++)
          - {{ $prediksi[$i]['Penyakit'] }} : {{ $prediksi[$i]['prediksi'] }} %<br>
        @endfor
      </div>
      <p>Saran perawatan dari dokter {{ $datadiagnosis->dokter }} untuk sapi dengan ID {{ $datadiagnosis->idSapi }}</p>
      <div class="card-panel white">
        <p>{{ $datadiagnosis->saran }}</p>
      </div>
    </div>
  </div>
@endsection
