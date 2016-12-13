@extends('main')

@section('title', 'Diagnosis')

@section('content')
  <div class="row">
    <div class="col s12">
      <h4 class="left-aligned">Diagnosis</h4>
    </div>
  </div>
  <div class="row no-margin-bottom">
    <div class="col s12 m6 l6">
      <h5 class="left">ID Sapi : {{ $dataset['idSapi'] }}</h6><br>
    </div>
    <div class="col s12 m6 l6">
      <h6 class="right">Petugas : {{ $dataset['petugas'] }}</h6>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <p>Berdasarkan pemeriksaan yang dilakukan oleh {{ $dataset['petugas'] }} berikut gejala-gejala yang teridentifikasi.</p>
      <div class="card-panel white">
        @for($i = 0; $i < count($gejala); $i++)
          - {{ $gejala[$i]['gejala'] }}<br>
        @endfor
      </div>
      <p>Berikut prediksi penyakit yang mungkin diderita sapi dengan ID {{ $dataset['idSapi']}}.</p>
      <div class="card-panel white">
        @for($i = 0; $i < count($prediksi); $i++)
          - {{ $prediksi[$i]['Penyakit'] }} : {{ $prediksi[$i]['prediksi'] }} %<br>
        @endfor
      </div>
      <p>Saran perawatan untuk sapi dengan ID {{ $dataset['idSapi'] }}</p>
        <form action="{{ url('/tambahDiagnosis') }}" method="POST">
          {!! csrf_field() !!}
            <input type="hidden" name="idPemeriksaan" value="{{ $dataset['idPemeriksaan'] }}">
            <div class="input-field col s12">
              <textarea id="input-saran" class="materialize-textarea" name="saran" required></textarea>
              <label for="input-saran">Saran</label>
            </div>
            <button class="btn waves-effect waves-light lower-a-bit" type="submit" name="submit">Simpan
              <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
  </div>
@endsection
