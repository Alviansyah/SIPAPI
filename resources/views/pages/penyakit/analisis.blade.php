@extends('main')

@section('title', 'Analisis Gejala')

@section('content')
  <div class="row">
    <div class="col s12">
      <h4 class="left-aligned">Analisis Gejala</h4>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m6 l6">
      <h5 class="left">ID Sapi : {{ $dataset->idSapi }}</h6><br>
    </div>
    <div class="col s12 m6 l6">
      <h6 class="right">Petugas : {{ $dataset->petugas }}</h6>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <p class="flow-text">Berdasarkan pemeriksaan yang dilakukan oleh {{ $dataset->petugas }} berikut gejala-gejala yang teridentifikasi.</p>
      <div class="card-panel white">
        
      </div>
    </div>
  </div>
@endsection
