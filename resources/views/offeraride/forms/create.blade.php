@extends('master')

@section('content')
<div class="container">
	<h1>Offer a ride</h1>

	<hr>

	<div class="panel panel-primary">
		
		<div class="panel-heading">
			<h3 class="panel-title">Plan a trip to {{ $fixtures->fixture }}</h3>
		</div>
		<div class="panel-body">
			<ul>
				<li>Date: Sat 25th Match 2017</li>
				<li>Stadium: {{ $fixtures->stadium }}</li>
				<li>Kick off: {{ $fixtures->kick_off_time }}</li>
			</ul>
		</div>
		
	</div>

	<hr>


	<form method="post" action="/offeraride/store">
	  
	  <h2>Pick-up and drop-off points</h2>
	  <div class="form-group well"> 
		  <label for="pickUp">Pick-up</label>
		  <div class="form-group{{ $errors->has('pickup') ? ' has-error' : '' }}">
		    <input type="text" name="pickup" class="form-control" id="exampleInputPickUp" aria-describedby="emailHelp" placeholder="Pick up">
		    @if ($errors->has('pickup'))
                <span class="help-block">
                    <strong>{{ $errors->first('pickup') }}</strong>
                </span>
            @endif
		  </div>

		  <label for="dropOff">drop-off</label>
		  <div class="form-group{{ $errors->has('dropoff') ? ' has-error' : '' }}">
		    <input type="text" name="dropoff" class="form-control" id="exampleInputDropOff1" placeholder="Drop-off">
		    @if ($errors->has('dropoff'))
                <span class="help-block">
                    <strong>{{ $errors->first('dropoff') }}</strong>
                </span>
            @endif
		  </div>
	  </div>

	  <hr>

	  <h2>Date & Time</h2>
	  
	  <div class="form-group">
		<label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
		  <input type="checkbox" name="round_trip" value="1" class="custom-control-input">
		  <span class="custom-control-indicator"></span>
		  <span class="custom-control-description">Return trip</span>
		</label>
	  </div>

	  <div class="form-inline well">

	  	  <div class="input-group">
			  <div class="input-group date {{ $errors->has('travel_date') ? ' has-error' : '' }}">
			  	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			    <input type="text" name="travel_date[date]" class="form-control datepicker" aria-describedby="sizing-addon1" placeholder="Travel date:">
			  </div>
			   @if ($errors->has('travel_date'))
                <span class="help-block">
                     <strong>{{ $errors->first('travel_date') }}</strong>
                </span>
              @endif
		  </div>

          <div class="input-group">
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
		  </div>

		  <div class="input-group">
		  <select class="form-control" name="travel_date[min]">
			 <option value="" selected="selected"/>
			 <option value="00">00</option>
			 <option value="10">10</option>
			 <option value="20">20</option>
			 <option value="30">30</option>
			 <option value="40">40</option>
			 <option value="50">50</option>
		  </select>
		  </div>
	  </div>
	  
	  <div class="form-inline well">
		  
		  <div class="input-group">
		  	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		    <input type="text" name="return_date[date]" class="form-control datepicker" id="exampleInputReturnDate" placeholder="Return date:">
		  </div>

		  <select class="form-control" name="return_date[hour]">
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

		  <select class="form-control" name="return_date[min]">
			<option value="" selected="selected"/>
			<option value="00">00</option>
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="30">30</option>
			<option value="40">40</option>
			<option value="50">50</option>
		  </select>

	  </div>
	  <hr>

	  <h2>Car Details</h2>	  
  	  <div class="form-group well">	
	  	  <label for="passengerContribution">Passenger Contribution</label>
		  

		  <div class="input-group">
		  	<span class="input-group-addon"><span class="glyphicon glyphicon-gbp"></span></span>
		    <input type="text" name="contribution" class="form-control" id="exampleInputReturnDate" placeholder="Amount">
		  </div>
	  </div>

	  <div class="form-group well"> 
		  <div class="input-group {{ $errors->has('number_of_seats') ? ' has-error' : '' }}">
	        <span class="input-group-addon">Number of seats</span>
	        <select id="lunch" class="selectpicker form-control" name="number_of_seats">
	          <option value="0">0</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
	        </select>
	      </div>
	      @if ($errors->has('number_of_seats'))
          <span class="help-block">
            <strong>{{ $errors->first('number_of_seats') }}</strong>
          </span>
          @endif
      </div>

      <div class="form-group well"> 
		  <div class="form-group">
	        <label for="rideDetails">Ride Details</label>
	        <p>Please add further details about your ride - it'll save you from replying to lots of messages from passengers</p>
	        <textarea class="form-control" name="ride_details" rows="6"></textarea>
	      </div>

	      <div class="form-group">
		      <div class="input-group">
		        <span class="input-group-addon">Pick up flexibility</span>
		        <select id="lunch" class="selectpicker form-control" name="flexibility">
		          <option value="ON_TIME">Right on time</option>
				  <option value="FIFTEEN_MINUTES">In a 15 minutes window</option>
				  <option value="THIRTY_MINUTES">In a 30 minutes window</option>
				  <option value="ONE_HOUR">In a 1 hour window</option>
		        </select>
		      </div>
	      </div>

	      <div class="form-group">
		      <div class="input-group {{ $errors->has('team_support') ? ' has-error' : '' }}">
		        <span class="input-group-addon">Team Support</span>
			    <input type="text" name="team_support" class="form-control" placeholder="">
		      </div>
		      @if ($errors->has('team_support'))
          	  <span class="help-block">
            	<strong>{{ $errors->first('team_support') }}</strong>
          	  </span>
          	  @endif
	      </div>
      </div>


      <div class="form-group well"> 
		  <div class="input-group {{ $errors->has('number_of_seats') ? ' has-error' : '' }}">
	      	<div class="checkbox">
			    <label>
			      <input type="checkbox" name="terms_condition" value="1"> I accept the <a href="#">T&Cs</a> and <a href="#">Privacy Policy</a>, certify that I hold a driving licence and have valid car insurance.
			    </label>
			 </div>
	      </div>
	      @if ($errors->has('number_of_seats'))
          <span class="help-block">
            <strong>{{ $errors->first('number_of_seats') }}</strong>
          </span>
          @endif
      </div>


      <input type="hidden" name="fixture_id" value="{{ $fixtures->id }}">
	  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	  <button type="submit" class="btn btn-primary">Continue</button>
	</form>

</div>


@endsection