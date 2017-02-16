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
			  <div class="form-inline well">
				  <div class="input-group date">
				  	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>

				    <input type="text" name="travel_date[date]" class="form-control datepicker" aria-describedby="sizing-addon1" placeholder="Travel date:">
				  </div>

				  <select class="form-control" name="travel_date[hour]">
					 <option value="" selected="selected"/>
					<option value="0">00</option>
					<option value="1">01</option>
					<option value="2">02</option>
					<option value="3">03</option>
					<option value="4">04</option>
					<option value="5">05</option>
					<option value="6">06</option>
					<option value="7">07</option>
					<option value="8">08</option>
					<option value="9">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
				  </select>

				  <select class="form-control" name="travel_date[min]">
					  	<option value="" selected="selected"/>
						<option value="0">00</option>
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
						<option value="40">40</option>
						<option value="50">50</option>
				  </select>


			  </div>
			  
			  <div class="form-inline well">
				  <div class="input-group">
				  	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>

				    <input type="text" name="return_date" class="form-control datepicker" id="exampleInputReturnDate" placeholder="Return date:">
				  </div>

				  <select class="form-control" name="">
					<option value="" selected="selected"/>
					<option value="0">00</option>
					<option value="1">01</option>
					<option value="2">02</option>
					<option value="3">03</option>
					<option value="4">04</option>
					<option value="5">05</option>
					<option value="6">06</option>
					<option value="7">07</option>
					<option value="8">08</option>
					<option value="9">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
				  </select>

				  <select class="form-control">
					<option value="" selected="selected"/>
					<option value="0">00</option>
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
				  </select>
			  </div>
			  <hr>

			  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			  <button type="submit" class="btn btn-primary">Continue</button>
			</form>

		</div>
	</div>

@endsection