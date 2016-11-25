<!DOCTYPE html>
<html>
    <head>
        <title>SIPAPI | Login</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="materialize/css/custom-css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <!-- Web Content -->
        <div class="container">
            <div class="container">
                <div class="row" style="margin-top: 15px !important;">
                    <div class="col s12 m12 l12">
                        <h2 class="center-align">SIPAPI</h2>
                        <h4 class="center-align">Sistem Informasi Pemeliharaan Sapi</h4>
                    </div>
                </div>
                <div class="bold-divider"></div>
                <div class="row valign-wrapper">
                    <div class="col l6 m8 s12 offset-l3 offset-m2">
                            <h5 class="valign">LOGIN</h5>
                        <form method="POST" action="{{ url('/login') }}">
                            {!!  csrf_field() !!}
                            <div class="card-panel red lighten-5">
                                <div class="input-field no-margin-bottom">
                                    <input id="username" type="text" class="validate" name="username" value="{{ old('username') }}">
                                    <label for="username">Username</label>
                                </div>
                                <div class="input-field no-margin-top">
                                    <input id="password" type="password" class="validate" name="password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="valign-wrapper block-display" style="margin-top: 15px !important;">
                                    <div class="valign">
                                        <button class="btn-flat waves-effect waves-light maximize-width" type="submit" name="btn_login">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row" style="margin-top: 30px !important;">
                    <div class="col s12 m12 l12">
                        <div class="center-align">&copy; PPLDev Team</div>
                        <div class="center-align">Program Studi SIstem Informasi<br>Universitas Jember</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of Web Content -->
    @include('partials._scripts')
    </body>
</html>
