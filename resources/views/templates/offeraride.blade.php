@extends('master')

@section('content')


	<div class="content-section">
		<div class="container">
			<h1>Offer a ride</h1>

			<form method="post" action="/offeraride">
			  
			  <h2>Pick-up and drop-off points</h2>

			  <label for="pickUp">Pick-up</label>
			  <div class="form-group">
			    <input type="text" name="pickup" class="form-control" id="exampleInputPickUp" aria-describedby="emailHelp" placeholder="Pick up">
			  </div>

			  <label for="dropOff">drop-off</label>
			  <div class="form-group">
			    <input type="text" name="dropoff" class="form-control" id="exampleInputDropOff1" placeholder="Drop-off">
			  </div>

			  <hr>

			  <h2>Date & Time</h2>
			  <label for="travelDate">Travel date:</label>			  
			  <div class="form-group date">
			    <input type="text" name="travel_date" class="form-control datepicker">
			  </div>
			  <label for="returnDate">Return date:</label>
			  <div class="form-group">
			    <input type="text" name="return_date" class="form-control datepicker" id="exampleInputReturnDate" placeholder="">
			  </div>

			  <hr>

			  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			  <button type="submit" class="btn btn-primary">Continue</button>
			</form>

		</div>
	</div>

@endsection