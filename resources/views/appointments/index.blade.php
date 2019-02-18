@extends('layouts.app')

@section('content')
	<div class="container">
		<div>
			<a class="btn btn-info pull-right" href="{{route('appointments.create')}}">Create Appointment</a>
		</div>

		@if(!$appointments || count($appointments) < 1)
			<div>
				<h2>You have no Appointments yet</h2>
			</div>
		@endif

		 <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading"><h2>Appointments</h2></div>
					<div class="panel-body" id="calendar">
							{!! $appointments->calendar() !!}
                	</div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection

@section('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
	{!! $appointments->script() !!}
@endsection