@extends('main')

@section('title', 'Pemeriksaan')

@section('content')
  <div class="row">
    <div class="col s12">
      <h4 class="left-aligned">Pemeriksaan</h4>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table class="responsive-table bordered">
        <thead>
          <th data-field="idSapi">ID Sapi</th>
          <th data-field="tanggal">Tanggal</th>
          <th data-field="petugas">Petugas</th>
        </thead>
        <tbody>
          @foreach ($data as $pemeriksaan)
            <tr>
              <td>{{ $pemeriksaan->idSapi }}</td>
              <td>{{ $pemeriksaan->tanggal }}</td>
              <td>{{ $pemeriksaan->petugas }}</td>
              <td>
                <a class="tooltipped hide-on-med-and-down" data-position="right" data-delay="50" data-tooltip="Analisis" href="/analisis/{{$pemeriksaan->idPemeriksaan}}"><i class="small material-icons">polymer</i></a>
                <a class="tooltipped hide-on-large-only" data-position="bottom" data-delay="50" data-tooltip="Analisis" href="/analisis/{{$pemeriksaan->idPemeriksaan}}"><i class="small material-icons">polymer</i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
