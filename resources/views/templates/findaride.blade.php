@extends('master')

@section('content')


	<div class="content-section">
		<div class="container">
			<h1>Find a ride</h1>

			<form>
				<div class="form-group">
				 	<select class="form-control">
				 	@foreach($sports as $sport)
	  					<option>{{ $sport->sport }}</option>
					@endforeach
					</select>
			  	</div>


			  	<hr>
			  	<button type="submit" class="btn btn-primary">Continue</button>
			</form>

		</div>
	</div>

@endsection