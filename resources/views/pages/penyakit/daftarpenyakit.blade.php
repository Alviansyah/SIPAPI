@extends('main')

@section('title', 'Daftar Penyakit')

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="lower-a-bit">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h5 class="left-aligned bold"><b>Daftar Penyakit</b></h5>
                    </div>
                </div>

                <table class="striped responsive-table">
                    <thead>
                    <tr>
                        <th data-field="namaPenyakit">Nama Penyakit</th>
                        <th data-field="Gejala">Gejala</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $penyakit)
                        <tr>
                            <td>{{ $penyakit->namaPenyakit }}</td>
                            <td>{{ $penyakit->gejala }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection