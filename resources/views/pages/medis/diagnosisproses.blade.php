@extends('main')

@section('title', 'Diagnosis')

@section('content')
<div class="row">
	<div class="col s12 m12 l12">
		<h4 class="left-aligned">Diagnosis</h4>
	</div>
</div>
<div class="row">
	<div class="col s12 m12 l12">
		<form action="{{url('diagnose')}}" method="POST">
			<table class="responsive-table striped">
				<?php $num = 0; ?>
				@foreach ($gejala as $gejala)
				@if ($num == 0) <tr> @endif
				<td>
					<input type="checkbox" id="{{ $gejala->idGejala }}" name="{{ $gejala->idGejala }}" value="{{ $gejala->idGejala }}"/>
					<label for="{{ $gejala->idGejala }}" class="black-text">{{ $gejala->gejala }}</label>
				</td>
				@if ($num == 2) </tr> @endif
				<?php ($num==2) ? $num=0 : $num++;?>
				@endforeach
			</table>
			<br>
			<button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">send</i></button>
		</form>
	</div>
</div>
@endsection