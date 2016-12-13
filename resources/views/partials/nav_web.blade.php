<!-- Web Mode -->
<ul class="right hide-on-med-and-down">
  @if ($user->level == 0 || $user->level == 2 || $user->level == 3)
    <li>
        <a href="#" class="dropdown-button" data-activates="pemeliharaan" data-beloworigin="true">Pemeliharaan</a>
        <ul id="pemeliharaan" class="dropdown-content">
            @if ($user->level == 0 || $user->level == 3)<li><a href="/sapi">Identitas Sapi</a></li>@endif
            @if ($user->level == 0 || $user->level == 2)<li><a href="/medis">Rekam Medis</a></li>@endif
            @if ($user->level == 0 || $user->level == 3)<li><a href="/jadwalpakan">Jadwal Pakan</a></li>@endif
            @if ($user->level == 0 || $user->level == 3)<li><a href="#">Stok Sapi</a></li>@endif
        </ul>
    </li>
  @endif
  @if ($user->level == 0 || $user->level == 2 || $user->level == 3)
    <li>
        <a href="#" class="dropdown-button" data-activates="penyakit" data-beloworigin="true" style="width: 130px !important;"><center>Penyakit</center></a>
        <ul id="penyakit" class="dropdown-content">
            <li><a href="/pemeriksaan">Pemeriksaan</a></li>
            <li><a href="/diagnosisproses">Diagnosis</a></li>
            @if ($user->level == 0 || $user->level == 2)<li><a href="/daftarpenyakit">Daftar Penyakit</a></li>@endif
        </ul>
    </li>
  @endif
  @if ($user->level == 0 || $user->level == 1)
    <li>
        <a href="#" class="dropdown-button" data-activates="laporan" data-beloworigin="true" style="width: 130px !important;"><center>Laporan</center></a>
        <ul id="laporan" class="dropdown-content">
            <li><a href="#">Pemeliharaan</a></li>
            <li><a href="#">Stok Sapi</a></li>
        </ul>
    </li>
  @endif
    <li class="right-align">
        <a href="#" class="dropdown-button" data-activates="account" data-beloworigin="true" style="width: 250px !important;font-size: 20px !important;">{{ $user->username }}</a>
        <ul class="dropdown-content image" id="account" style="background: url('{{ asset('img/userImg.jpg') }}');margin-right: 100px !important;">
            <a class="name-web disabled">{{ $user->name }}</a>
            <a class="email-web" href="#">{{ $user->email }}</a>
            <a class="logout-web" href="{{ url('/logout') }}"><b>Logout</b></a>
        </ul>
    </li>
</ul>
<!-- end of Web Mode -->
