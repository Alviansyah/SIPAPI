@extends('main')

@section('title', 'Sapi')

@section('content')
<div class="row lower-a-bit">
    @if (Session::has('message'))
    <div id="notif" class="row no-margin-bottom lower-a-bit">
      <div class="col s12 m12 l12">
            <div class="chip yellow">
                <span class="black-text" onclick="close()">{{ Session::get('message') }}<i class="close material-icons">close</i></span>
            </div>
        </div>
    </div>
    @endif
    <div class="col s12 m12 l12">
          <div class="row">
              <div class="col s12 m12 l12">
                  <h5 class="left-aligned bold"><b>Data Sapi</b></h5>
              </div>
          </div>
          <div class="fixed-action-btn">
              <a href="/tambah" class="btn-floating btn-large green tooltipped hide-on-med-and-down" data-position="bottom" data-delay="50" data-tooltip="Tambah Data" style="right: 50px !important; bottom: 50px !important;">
                  <i class="large material-icons">add</i>
              </a>
          </div>
          <a href="/tambah" class="btn-floating btn-large left green tooltipped hide-on-large-only" data-position="right" data-delay="50" data-tooltip="Tambah Data" style="top: 400px !important;">
              <i class="large material-icons">add</i>
          </a>
          <div class="row">
              <div class="col s12 m12 l12">
                  <table class="bordered highlight responsive-table">
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
                              <td>{{ $sapi->jenisKelamin == 1 ? 'Jantan' : 'Betina' }}</td>
                              <td>{{ $sapi->usia }} tahun</td>
                              <td>{{ $sapi->tinggi }} cm</td>
                              <td>{{ $sapi->bobot }} kg</td>
                              <td>
                                  <a class="tooltipped hide-on-med-and-down" data-position="right" data-delay="50" data-tooltip="Lihat" href="/sapidetail/{{$sapi->idSapi}}"><i class="small material-icons">visibility</i></a>
                                  <a class="tooltipped hide-on-large-only" data-position="bottom" data-delay="50" data-tooltip="Lihat" href="/sapidetail/{{$sapi->idSapi}}"><i class="small material-icons">visibility</i></a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
    </div>
</div>
@endsection
