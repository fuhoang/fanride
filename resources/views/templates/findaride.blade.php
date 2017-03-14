@extends('master')

@section('content')


	<div class="content-section">
		<div class="container">
			<h1>Find a ride</h1>

			<form>
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
			  	<button type="submit" class="btn btn-primary">Continue</button>
			</form>

		</div>
	</div>

@endsection