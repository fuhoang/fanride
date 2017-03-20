@extends('master')

@section('content')
<div class="container">
	
	<h1>Find a match day fixture</h1>
	
	<hr>

	<p>Find a fixture you want to offer a ride to.</p>
	
	<form method="post" action="/offeraride">
		<div class="form-group">
		 	<select id="selectSports" class="selectpicker">
		 		<option value="">Select a Sports</option>
			</select>
	  	</div>
	  	<hr>
	  	<div class="form-group ">
		 	<select id="selectLeagues" class="selectpicker">
					<option value="">Select a League</option>
			</select>
	  	</div>
	  	<hr>
	  	<div class="form-group" >
		 	<select id="selectTeams" class="selectpicker">
					<option value="">Select a Team</option>
			</select>
	  	</div>
		<hr>
		<div class="form-group" >
		 	<select id="selectFixtures" class="selectpicker">
					<option value="">Select a Fixture</option>
			</select>
	  	</div>
		
		<hr>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	  	<button type="submit" class="btn btn-primary">Continue</button>
	</form>
</div>
@endsection