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
                    <th data-field="idDiagnosis">ID Diagnosis</th>
                    <th data-field="idSapi">ID Sapi</th>
                    <th data-field="namaPenyakit">Penyakit</th>
                    <th data-field="saran">Saran</th>
                </tr>
            </thead>

            <tbody>
                @foreach($diagnosis as $diagnosis)
                <tr>
                    <td>{{ $diagnosis->idDiagnosis }}</td>
                    <td>{{ $diagnosis->idSapi }}</td>
                    <td>{{ $diagnosis->namaPenyakit }}</td>
                    <td>{{ $diagnosis->saran }}</td>
                    <td><a href="/diagnosisdetail/{{$diagnosis->idDiagnosis}}"><i class="small material-icons">visibility</i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection