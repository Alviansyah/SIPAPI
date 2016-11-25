<!-- Web Mode -->
<ul class="right hide-on-med-and-down">
    <li>
        <a href="#" class="dropdown-button" data-activates="pemeliharaan" data-beloworigin="true">Pemeliharaan</a>
        <ul id="pemeliharaan" class="dropdown-content">
            <li><a href="/sapi">Identitas Sapi</a></li>
            <li><a href="/medis">Rekam Medis</a></li>
            <li><a href="#">Jadwal Pakan</a></li>
            <li><a href="#">Stok Sapi</a></li>
        </ul>
    </li>
    <li><a href="#">Perkandangan</a></li>
    <li>
        <a href="#" class="dropdown-button" data-activates="penyakit" data-beloworigin="true" style="width: 130px !important;"><center>Penyakit</center></a>
        <ul id="penyakit" class="dropdown-content">
            <li><a href="#">Gejala</a></li>
            <li><a href="#">Diagnosis</a></li>
            <li><a href="#">Hipotesis</a></li>
            <li><a href="#">Daftar Penyakit</a></li>
        </ul>
    </li>
    <li>
        <a href="#" class="dropdown-button" data-activates="laporan" data-beloworigin="true" style="width: 130px !important;"><center>Laporan</center></a>
        <ul id="laporan" class="dropdown-content">
            <li><a href="#">Pemeliharaan</a></li>
            <li><a href="#">Jumlah Stok Sapi</a></li>
        </ul>
    </li>
    <li class="right-align">
        <a href="#" class="dropdown-button" data-activates="account" data-beloworigin="true" style="width: 250px !important;font-size: 20px !important;">Alvengerz</a>
        <ul class="dropdown-content image" id="account" style="background: url('{{ asset('img/userImg.jpg') }}');margin-right: 100px !important;">
            <a class="name-web disabled">{{ $user->name }}</a>
            <a class="email-web" href="#">{{ $user->email }}</a>
            <a class="logout-web" href="{{ url('/logout') }}"><b>Logout</b></a>
        </ul>
    </li>
</ul>
<!-- end of Web Mode -->