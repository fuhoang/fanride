@extends('master')

@section('content')
<div class="container">
	<h1>Find a ride</h1>
	<hr>
	<div class="form-group">
	 	<select id="selectSports" class="selectpicker">
	 		<option value="">Select a Sports</option>
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
</div>
@endsection