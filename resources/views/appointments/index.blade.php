@extends('layouts.app')

@section('content')
	<div class="container" id="calendar">
		<div>
			<a class="btn btn-info pull-right" href="{{route('appointments.create')}}">Create Appointment</a>
		</div>

		@if(count($appointments) < 1)
			<div>
				<h2>You have no Appointments yet</h2>
			</div>
		@endif

		@foreach($appointments as $appointment)
			{{$appointment->appointment_date}}<br>
			{{$appointment->appointment}}<br>
		@endforeach
	</div>
@endsection