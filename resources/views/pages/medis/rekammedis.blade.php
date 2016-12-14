@extends('main')

@section('title', 'Rekam Medis')

@section('content')
<div class="row">
    <div class="col s12 m12 l12">
        <h4 class="left-aligned">Laporan Pemeliharaan</h4>
    </div>
</div>
<div class="row">
    <div class="col s12 m12 l12">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th data-field="idSapi">ID Sapi</th>
                    <th data-field="jenisKelammin">Jenis Kelamin</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $medis)
                <tr>
                    <td>{{ $medis->idSapi }}</td>
                    <td>{{ $medis->jenisKelamin == 1 ? 'Jantan' : 'Betina' }}</td>
                    <td><a href="/medislist/{{$medis->idSapi}}"><i class="small material-icons">visibility</i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
