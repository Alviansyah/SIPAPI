@extends('main')

@section('title', 'Rekam Medis')

@section('content')
<div class="row">
    <div class="col s12 m12 l12">
        <h4 class="left-aligned">Rekam Medis</h4>
    </div>
</div>
<div class="row">
    <div class="col s12 m12 l12">
        <table class="responsive-table">
            <thead>
                <tr>
                  <th data-field="idDiagnosis">ID DIagnosis</th>
                  <th data-field="idSapi">ID Sapi</th>
                  <th data-field="tanggal">tanggal</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $listmedis)
                <tr>
                    <td>{{ $listmedis->idDiagnosis }}</td>
                    <td>{{ $listmedis->idSapi }}</td>
                    <td>{{ $listmedis->tanggal }}</td>
                    <td><a href="/medisdetail/{{$listmedis->idDiagnosis}}"><i class="small material-icons">class</i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
