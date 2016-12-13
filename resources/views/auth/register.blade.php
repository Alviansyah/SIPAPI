<!DOCTYPE html>
<html>
<head>
    <title>SIPAPI | Register</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <h5 class="valign">REGISTER</h5>
                <form method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="card-panel red lighten-5">
                        <div class="input-field no-margin-bottom">
                            <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required>
                            <label for="name">Name</label>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field no-margin-top">
                            <input id="username" type="text" class="validate" name="username" value="{{ old('username') }}" required>
                            <label for="username">Username</label>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-field">
                          <select name="level" required>
                            <option value="" disabled selected>Pilih level</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                          <label>Materialize Select</label>
                          @if ($errors->has('level'))
                              <span class="help-block">
                                      <strong>{{ $errors->first('level') }}</strong>
                                  </span>
                          @endif
                        </div>
                        <div class="input-field no-margin-top">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                            <label for="email">Email</label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field no-margin-top">
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="password">Password</label>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field no-margin-top">
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                            <label for="password-confirm">Confirm Password</label>
                        </div>
                        <div class="valign-wrapper block-display" style="margin-top: 15px !important;">
                            <div class="valign">
                                <button class="btn-flat waves-effect waves-light maximize-width" type="submit" name="btn_register">Register</button>
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
