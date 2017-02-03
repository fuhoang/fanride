@extends('master')

@section('content')


	<div class="content-section">
		<div class="container">
			<h1>Find a ride</h1>

			<form>
			  <label for="from">From</label>
			  <div class="form-group">
			    <input type="text" name="" class="form-control" id="exampleInputFrom" aria-describedby="emailHelp" placeholder="From">
			  </div>

			  <label for="to">To</label>
			  <div class="form-group">
			    <input type="text" name="" class="form-control" id="exampleInputTo" placeholder="To">
			  </div>

			  <hr>
			  
			  <button type="submit" class="btn btn-primary">Continue</button>
			</form>

		</div>
	</div>

@endsection