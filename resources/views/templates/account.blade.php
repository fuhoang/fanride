@extends('master')

@section('content')

	<div class="content-section">
		<div class="container">
			<h1>Your Account</h1>

			<form method="post" action="{{ url('/account/' . Auth::user()->id ) }}">
			  
			  <label for="changePassword">Change password</label>
			  <p>To change the current user password, enter the new password in both fields.</p>
			  
			  <div class="form-group">
			    <input type="password" name="new_password" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your new password">
			  </div>

			  <div class="form-group">
			    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm the password">
			  </div>

			  <hr>
		
			  <label for="name">Name</label>			  
			  <div class="form-group">
			    <input type="text" name="first_name" class="form-control" id="first_name" aria-describedby="firstName" value="{{ $user->first_name }}" placeholder="First name">
			  </div>

			  <div class="form-group">
			    <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $user->last_name }}" placeholder="Last name">
			  </div>

			  <hr>

			  <label for="exampleInputPassword1">Contact</label>			  
			  <div class="form-group">
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->email }}" placeholder="Email">
			  </div>

			  <div class="form-group">
			    <input type="text" name="mobile_number" class="form-control" id="exampleInputPassword1" value="{{ $user->mobile_number }}" placeholder="Mobile number">
			  </div>

			  <hr>

			  <label for="address">Address</label>			  
			  <div class="form-group">
			    <input type="text" name="street" class="form-control" id="exampleInputStreet" aria-describedby="emailHelp" placeholder="Street">
			  </div>

			  <div class="form-group">
			    <input type="text" name="town" class="form-control" id="exampleInputTown" placeholder="town">
			  </div>

			  <div class="form-group">
			    <input type="text" name="country" class="form-control" id="exampleInputCounty" placeholder="County">
			  </div>

			  <div class="form-group">
			    <input type="text" name="postcode" class="form-control" id="exampleInputPostcode" placeholder="Postcode">
			  </div>

			  <hr>

			  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			  <input type="hidden" name="_method" value="PUT">			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
	</div>

@endsection