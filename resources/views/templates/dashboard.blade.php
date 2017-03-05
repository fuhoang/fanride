@extends('master')

@section('content')


	<div class="content-section">
		<div class="container">
			<h1>Your Dashboard</h1>

			@foreach ($travels as $travel)
    			<p>This is travel {{ $travel->id }}</p>
			@endforeach
		</div>


	</div>

@endsection