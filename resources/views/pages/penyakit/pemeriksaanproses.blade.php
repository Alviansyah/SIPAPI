@extends('main')

@section('title', 'Pemeriksaan')

@section('content')
    @if (Session::has('message'))
        <div class="lower-a-bit chip yellow">
            <span class="black-text" onclick="close()">{{ Session::get('message') }}<i class="close material-icons">close</i></span>
        </div>
    @endif
    <div class="row">
        <div class="col s12 m12 l12">
          <h4 class="left-aligned">Pemeriksaan</h4>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <form action="{{ url('tambahpemeriksaan') }}" method="POST">
              {!! csrf_field() !!}
              <div class="row">
                <div class="col s12 m5 l4">
                  @if ($errors->first('idSapi'))
                    <div class="chip red lighten-2 black-text">
                      ID Sapi harus dipilih. <i class="material-icons close">close</i>
                    </div>
                  @endif
                  <label>ID Sapi</label>
                  <select class="browser-default" name="idSapi">
                    <option value="" disabled selected>Pilih ID Sapi</option>
                    @foreach ($sapidata as $key => $sapidata)
                      <option value="{{ $sapidata }}" name="idSapi">{{ $sapidata }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="divider lower-a-bit"></div>
              @if ($errors->first('gejala'))
                <div class="chip red lighten-2 black-text">
                  Pilih minimal satu gejala. <i class="material-icons close">close</i>
                </div>
              @endif
              @for ($i = 0; $i < count($gejaladata); $i++)
              <div class="section">
                <h5>{{ $gejaladata[$i]['kategori'] }}</h5>
                <table class="responsive-table">
                  @for ($j = 0; $j < count($gejaladata[$i])-1; $j++)
                  <input type="checkbox" id="{{ $gejaladata[$i][$j][0] }}" name="gejala[]" value="{{ $gejaladata[$i][$j][0] }}"/>
                  <label class="black-text make-space-right" for="{{ $gejaladata[$i][$j][0] }}">{{ $gejaladata[$i][$j][1] }}</label>
                  @endfor
                </table>
              </div>
              <div class="divider"></div>
              @endfor
              <br>
              <button class="btn waves-effect waves-light" type="submit" name="action">Tambah Entry Pemeriksaan<i class="material-icons right">send</i></button>
            </form>
        </div>
    </div>
@endsection
