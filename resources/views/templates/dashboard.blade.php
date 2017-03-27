@extends('master')

@section('content')
<div class="container">
	<h1>Your Dashboard</h1>

	@if(Session::has('message'))
		<div class="alert alert-info">
    		<a class="close" data-dismiss="alert">×</a>
    		{!!Session::get('message')!!}
		</div>
	@endif


	@foreach ($travels as $travel)
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{ $travel->pickup }} -> {{ $travel->dropoff }}</h3>
		  </div>
		  <div class="panel-body">
		    <ul class="list">
			    <li>
			    	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
					{{ Carbon\Carbon::parse($travel->travel_date)->format('D d M - H:i') }}
				</li>
				<li>
					<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
					{{ $travel->fixture->fixture }}
				</li>
				<li>
					<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					{{ $travel->fixture->kick_off_time }} 
				</li>				
				<li>
					<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					{{ $travel->fixture->stadium }} 
				</li>
			</ul>


			<ul class="list-inline">
		  		<li><a href="{{ url('/offeraride/' . $travel->id . '/edit') }}">Edit</a></li>
		  		<li>
            		<a href="{{ url('/offeraride/delete/' .$travel->id ) }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
               	 	Delete
            		</a>

	                <form id="delete-form" action="{{ url('/offeraride/delete/'. $travel->id) }}" method="POST" style="display: none;">
	                	<input type="hidden" name="_method" value="DELETE">
	                    {{ csrf_field() }}
	                </form>
          		</li>
			</ul>
		  </div>
		</div>

		@if($travel->round_trip)
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{ $travel->dropoff }} -> {{ $travel->pickup }}</h3>
		  </div>
		  <div class="panel-body">
		    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
				{{ Carbon\Carbon::parse($travel->return_date)->format('D d M - H:i') }}
		  </div>
		</div>
		@endif
	@endforeach
</div>
@endsection