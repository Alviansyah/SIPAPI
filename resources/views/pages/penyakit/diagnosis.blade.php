@extends('main')

@section('title', 'Diagnosis')

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
          @if (Session::has('message'))
              <div class="lower-a-bit chip yellow">
                  <span class="black-text" onclick="close()">{{ Session::get('message') }}<i class="close material-icons">close</i></span>
              </div>
          @endif
            <div class="lower-a-bit">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h5 class="left-aligned bold"><b>Data Diagnosis</b></h5>
                    </div>
                </div>

                <table class="bordered highlight responsive-table">
                    <thead>
                    <tr>
                        <th data-field="idPemeriksaan">ID Pemeriksaan</th>
                        <th data-field="idSapi">ID Sapi</th>
                        <th data-field="tanggal">Tanggal</th>
                        <th data-field="dokter">Dokter</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $diagnosis)
                        <tr>
                            <td>{{ $diagnosis->idPemeriksaan }}</td>
                            <td>{{ $diagnosis->idSapi }}</td>
                            <td>{{ $diagnosis->tanggal }}</td>
                            <td>{{ $diagnosis->dokter }}</td>
                            <td>
                                <a class="tooltipped hide-on-med-and-down" data-position="right" data-delay="50" data-tooltip="Lihat" href="/diagnosisdetail/{{$diagnosis->idDiagnosis}}"><i class="small material-icons">visibility</i></a>
                                <a class="tooltipped hide-on-large-only" data-position="bottom" data-delay="50" data-tooltip="Lihat" href="/diagnosisdetail/{{$diagnosis->idDiagnosis}}"><i class="small material-icons">visibility</i></a>
                                @if ($user->level == 2)
                                  @if ($diagnosis->idstatussapi == 2)
                                    <a class="tooltipped hide-on-med-and-down" data-position="right" data-delay="50" data-tooltip="Nyatakan sehat!" href="/updatesehat/{{$diagnosis->idSapi}}"><i class="small material-icons">verified_user</i></a>
                                    <a class="tooltipped hide-on-large-only" data-position="bottom" data-delay="50" data-tooltip="Nyatakan sehat!" href="/updatesehat/{{$diagnosis->idSapi}}"><i class="small material-icons">verified_user</i></a>
                                  @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
