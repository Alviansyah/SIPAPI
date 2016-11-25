<!-- Mobile Mode -->
<a href="#" class="button-collapse hide-on-large-only" data-activates="mobile-menu"><i
            class="material-icons">menu</i></a>
<ul id="mobile-menu" class="side-nav green lighten-5" style="width: 350px !important;">
    <li>
        <div class="userView"><img class="background responsive-img" src="{!! asset('img/userViewBg.jpg') !!}"
                                   alt="BackgroundImage">
            <a class="left" href="#" style="padding-right: 30px !important;"><img
                        class="right circle responsive-img" src="{!! asset('img/userImg.jpg') !!}" alt="UserImg"
                        style="width: 55% !important; height: 55% !important;"></a>
            <a href="#"><span class="white-text name"
                              style="font-size: 20px !important;">{{ $user->name }}</span></a>
            <a href="#"><span class="white-text email"
                              style="font-size: 12px !important;padding-bottom: 5px !important;"><u>{{ $user->email }}</u></span></a>
        </div>
    </li>
    <li>
        <div class="divider"></div>
    </li>
    <li class="no-padding">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a class="collapsible-header waves-effect waves-red">Pemeliharaan</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a class="waves-effect waves-yellow" href="/sapi">Identitas Sapi</a></li>
                        <li><a class="waves-effect waves-yellow" href="/medis">Rekam Medis</a></li>
                        <li><a class="waves-effect waves-yellow" href="#">Jadwal Pakan</a></li>
                        <li><a class="waves-effect waves-yellow" href="#">Stok Sapi</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li><a class="waves-effect waves-red" href="#">Perkandangan</a></li>
    <li class="no-padding">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a class="collapsible-header waves-effect waves-red">Penyakit</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a class="waves-effect waves-yellow" href="#">Gejala</a></li>
                        <li><a class="waves-effect waves-yellow" href="#">Diagnosis</a></li>
                        <li><a class="waves-effect waves-yellow" href="#">Hipotesis</a></li>
                        <li><a class="waves-effect waves-yellow" href="#">Daftar Penyakit</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li class="no-padding">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a class="collapsible-header waves-effect waves-red">Laporan</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a class="waves-effect waves-yellow" href="#">Pemeliharaan</a></li>
                        <li><a class="waves-effect waves-yellow" href="#">Jumlah Stok Sapi</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="waves-effect waves-teal" href="{{ url('/logout') }}">Logout</a></li>
</ul>
<!-- end of Mobile Mode -->