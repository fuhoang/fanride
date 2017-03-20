@extends('master')

@section('content')
<div class="container">
	
	<h1>Find a Match</h1>
	
	<hr>

	<p>Find a match you want to offer a ride to.</p>
	
	<form method="post" action="">
		<div class="form-group">
		 	<select id="selectSports" class="selectpicker">
		 		<option value="">Select a Sport</option>
		 	@foreach($sports as $sport)
					<option value="{{ $sport->id }}">{{ $sport->sport }}</option>
			@endforeach
			</select>
	  	</div>

	  	<div class="form-group ">
		 	<select id="selectLeagues" class="selectpicker">
					<option value="">Select a League</option>
			</select>
	  	</div>

	  	<div class="form-group" >
		 	<select id="selectTeams" class="selectpicker">
					<option value="">Select a Team</option>
			</select>
	  	</div>
		<hr>

		<div class="list-group fixtures-list">
		</div>

		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	  	<button type="submit" class="btn btn-primary">Continue</button>
	</form>
</div>
@endsection