@extends('main')

@section('title', 'Sapi')

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="lower-a-bit">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h5 class="left-aligned bold"><b>Data Sapi</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th data-field="idSapi">ID Sapi</th>
                                    <th data-field="Kategori">Kategori</th>
                                    <th data-field="jenisKelamin">Jenis Kelamin</th>
                                    <th data-field="usia">Usia</th>
                                    <th data-field="tinggi">Tinggi</th>
                                    <th data-field="bobot">Bobot</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $sapi)
                            <tr>
                                <td>{{ $sapi->idSapi }}</td>
                                <td>{{ $sapi->kategori }}</td>
                                <td>{{ $sapi->jenisKelamin == 1 ? 'Pria' : 'Wanita' }}</td>
                                <td>{{ $sapi->usia }} tahun</td>
                                <td>{{ $sapi->tinggi }} cm</td>
                                <td>{{ $sapi->bobot }} kg</td>
                                <td><a href="/sapiedit/{{ $sapi->idSapi }}"><i class="small material-icons">mode_edit</i></a><a href="/sapidetail/{{$sapi->idSapi}}"><i class="small material-icons">visibility</i></a></td>
                            </tr>
                            @endforeach.
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection