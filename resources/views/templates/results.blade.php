@extends('master')

@section('content')


	<div class="content-section">
		<div class="container">
			<h1>Results</h1>

			@foreach($fixtures as $fixture)
  				<p>{{ $fixture->match_day }}</p>
			@endforeach
			
		</div>
	</div>

@endsection