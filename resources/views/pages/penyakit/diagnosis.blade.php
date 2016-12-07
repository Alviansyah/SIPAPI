@extends('main')

@section('title', 'Diagnosis')

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $diagnosis)
                        <tr>
                            <td>{{ $diagnosis->idPemeriksaan }}</td>
                            <td>{{ $diagnosis->idSapi }}</td>
                            <td>{{ $diagnosis->tanggal }}</td>
                            <td>
                                <a class="tooltipped hide-on-med-and-down" data-position="right" data-delay="50" data-tooltip="Lihat" href="/sapidetail/{{$diagnosis->idSapi}}"><i class="small material-icons">visibility</i></a>
                                <a class="tooltipped hide-on-large-only" data-position="bottom" data-delay="50" data-tooltip="Lihat" href="/sapidetail/{{$diagnosis->idSapi}}"><i class="small material-icons">visibility</i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection