@extends('main')

@section('title', 'Jadwal Pakan')

@section('content')
  <div class="row">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="left-aligned bold"><b>Jadwal Pakan</b></h5>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m12 l12">
        <div class="card-panel cyan lighten-5">
          <table class="responsive-tbl centered bordered">
            <thead>
              <th>Jam</th>
              <th>Senin</th>
              <th>Selasa</th>
              <th>Rabu</th>
              <th>Kamis</th>
              <th>Jumat</th>
              <th>Sabtu</th>
              <th>Minggu</th>
            </thead>
            <tbody>
              @foreach($data as $jadwal)
                <tr>
                  <td>{{ $jadwal->jam }}</td>
                  <td>{{ ($jadwal->hari == "senin") ? $jadwal->jenisPakan : '-' }}</td>
                  <td>{{ ($jadwal->hari == "selasa") ? $jadwal->jenisPakan : '-' }}</td>
                  <td>{{ ($jadwal->hari == "rabu") ? $jadwal->jenisPakan : '-' }}</td>
                  <td>{{ ($jadwal->hari == "kamis") ? $jadwal->jenisPakan : '-' }}</td>
                  <td>{{ ($jadwal->hari == "jumat") ? $jadwal->jenisPakan : '-' }}</td>
                  <td>{{ ($jadwal->hari == "sabtu") ? $jadwal->jenisPakan : '-' }}</td>
                  <td>{{ ($jadwal->hari == "minggu") ? $jadwal->jenisPakan : '-' }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
@endsection
