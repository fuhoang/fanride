@extends('master')

@section('content')


	<div class="content-section">
		<div class="container">
			<h1>Your Account</h1>

			<form>
			  
			  <label for="exampleInputPassword1">Change password</label>
			  <p>To change the current user password, enter the new password in both fields.</p>
			  
			  <div class="form-group">
			    <input type="password" name="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your new password">
			  </div>

			  <div class="form-group">
			    <input type="password" name="" class="form-control" id="exampleInputPassword1" placeholder="Confirm the password">
			  </div>

			  <hr>
		
			  <label for="exampleInputPassword1">Name</label>			  
			  <div class="form-group">
			    <input type="text" name="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First name">
			  </div>

			  <div class="form-group">
			    <input type="text" name="" class="form-control" id="exampleInputPassword1" placeholder="Last name">
			  </div>

			  <hr>

			  <label for="exampleInputPassword1">Contact</label>			  
			  <div class="form-group">
			    <input type="email" name="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
			  </div>

			  <div class="form-group">
			    <input type="text" name="" class="form-control" id="exampleInputPassword1" placeholder="Mobile number">
			  </div>

			  <hr>

			  <label for="exampleInputPassword1">Address</label>			  
			  <div class="form-group">
			    <input type="text" name="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Street">
			  </div>

			  <div class="form-group">
			    <input type="text" name="" class="form-control" id="exampleInputPassword1" placeholder="town">
			  </div>

			  <div class="form-group">
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="County">
			  </div>

			  <div class="form-group">
			    <input type="text" name="" class="form-control" id="exampleInputPassword1" placeholder="Postcode">
			  </div>

			  <hr>

			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
	</div>

@endsection