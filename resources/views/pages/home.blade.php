@extends('main')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card-panel teal lighten-5 lower-a-bit" style="height: 503px;">
                <h1 class="center-align">WELCOME</h1>
                <h1 class="center-align">{{ $user->name }}</h1>
            </div>
        </div>
    </div>
@endsection