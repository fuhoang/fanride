@extends('master')

@section('content')
<div class="container">
	<h1>Offer a ride</h1>

	<form method="post" action="{{ url('/offeraride/' . $travel->id) }}">
	  
	  <h2>Pick-up and drop-off points</h2>
	  <div class="form-group well"> 
		  <label for="pickUp">Pick-up</label>
		  <div class="form-group{{ $errors->has('pickup') ? ' has-error' : '' }}">
		    <input type="text" name="pickup" class="form-control" id="exampleInputPickUp" placeholder="Pick up" value="{{ $travel->pickup }}">
		    @if ($errors->has('pickup'))
                <span class="help-block">
                    <strong>{{ $errors->first('pickup') }}</strong>
                </span>
            @endif
		  </div>

		  <label for="dropOff">drop-off</label>
		  <div class="form-group{{ $errors->has('dropoff') ? ' has-error' : '' }}">
		    <input type="text" name="dropoff" class="form-control" id="exampleInputDropOff1" placeholder="Drop-off" value="{{ $travel->dropoff }}">
		    @if ($errors->has('dropoff'))
                <span class="help-block">
                    <strong>{{ $errors->first('dropoff') }}</strong>
                </span>
            @endif
		  </div>
	  </div>

	  <hr>

	  <h2>Date & Time</h2>
	 
	  <div class="form-inline well">
	  	  <div class="input-group">
			  <div class="input-group date {{ $errors->has('travel_date') ? ' has-error' : '' }}">
			  	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			    <input type="text" name="travel_date[date]" class="form-control datepicker" aria-describedby="sizing-addon1" placeholder="Travel date:" value="{{ $travel_date['date'] }}">
			  </div>
			   @if ($errors->has('travel_date'))
                <span class="help-block">
                     <strong>{{ $errors->first('travel_date') }}</strong>
                </span>
              @endif
		  </div>

          <div class="input-group">
			  <select class="form-control" name="travel_date[hour]">
			  	@foreach($hours_value as $key => $value)
			  		@if($travel_date['hours'] == $key))
			  		<option value="{{$key}}" selected="selected">{{$value}}</option>
			  		@else
			  		<option value="{{$key}}">{{$value}}</option>
			  		@endif
			  	@endforeach
			  </select>
		  </div>

		  <div class="input-group">
			  <select class="form-control" name="travel_date[min]">
			  	@foreach($mins_value as $key => $value)
			  		@if($travel_date['mins'] == $key)
			  		<option value="{{$key}}" selected="selected">{{$value}}</option>
			  		@else
			  		<option value="{{$key}}">{{$value}}</option>
			  		@endif
			  	@endforeach
			  </select>
		  </div>
	  </div>
	  


	  @if($travel->round_trip)
	  <div class="form-inline well">
		  
		  <div class="input-group">
		  	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		    <input type="text" name="return_date[date]" class="form-control datepicker" id="exampleInputReturnDate" placeholder="Return date:" value="{{$return_date['date']}}">
		  </div>

		  <div class="input-group">
			  <select class="form-control" name="return_date[hour]">
			  	@foreach($hours_value as $key => $value)
				  	@if($return_date['hours'] == $key)
				  		<option value="{{$key}}" selected="selected">{{$value}}</option>
				  	@else
				  		<option value="{{$key}}">{{$value}}</option>
				  	@endif
				@endforeach
			  </select>
		  </div>

		  <div class="input-group">
			  <select class="form-control" name="travel_date[min]">
			  	@foreach($mins_value as $key => $value)
			  		@if($return_date['mins'] == $key)
			  		<option value="{{$key}}" selected="selected">{{$value}}</option>
			  		@else
			  		<option value="{{$key}}">{{$value}}</option>
			  		@endif
			  	@endforeach
			  </select>
		  </div>
	  </div>
	  @endif
	  <hr>

	  <h2>Car Details</h2>	  
  	  <div class="form-group well">	
	  	  <label for="passengerContribution">Passenger Contribution</label>
		  

		  <div class="input-group">
		  	<span class="input-group-addon"><span class="glyphicon glyphicon-gbp"></span></span>
		    <input type="text" name="contribution" class="form-control" id="exampleInputReturnDate" placeholder="Amount" value="{{ $travel->contribution }}">
		  </div>
	  </div>

	  <div class="form-group well"> 
		  <div class="input-group {{ $errors->has('number_of_seats') ? ' has-error' : '' }}">
	        <span class="input-group-addon">Number of seats</span>
	        <select id="lunch" class="selectpicker form-control" name="number_of_seats">
	          @foreach($seat_value as $key => $value)
			  	@if($travel->number_of_seats == $key)
			  		<option value="{{$key}}" selected="selected">{{$value}}</option>
			  	@else
			  		<option value="{{$key}}">{{$value}}</option>
			  	@endif
			  @endforeach
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
	        <textarea class="form-control" name="ride_details" rows="6">{{ $travel->ride_details }}</textarea>
	      </div>

	      <div class="form-group">
		      <div class="input-group">
		        <span class="input-group-addon">Pick up flexibility</span>
		        <select id="lunch" class="selectpicker form-control" name="flexibility">
		          @foreach($flexibility as $key => $value)
		          	@if($travel->flexibility == $key))
		          	<option value="{{$key}}" selected="true">{{$value}}</option>
		          	@else
		          	<option value="{{$key}}">{{$value}}</option>
		          	@endif
		          @endforeach
		        </select>
		      </div>
	      </div>

	      <div class="form-group">
		      <div class="input-group {{ $errors->has('team_support') ? ' has-error' : '' }}">
		        <span class="input-group-addon">Team Support</span>
			    <input type="text" name="team_support" class="form-control" placeholder="" value="{{ $travel->team_support }}">
		      </div>
		      @if ($errors->has('team_support'))
          	  <span class="help-block">
            	<strong>{{ $errors->first('team_support') }}</strong>
          	  </span>
          	  @endif
	      </div>
      </div>

	  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	  <input type="hidden" name="_method" value="PUT">
	  <button type="submit" class="btn btn-primary">Continue</button>
	</form>

</div>
</div>

@endsection