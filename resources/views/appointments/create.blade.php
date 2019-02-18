@extends('layouts.app')

@section('content')
	<div class="container">
		<form action="{{ route('appointments.store') }}" method="post">
			{{ csrf_field() }}

			Appointment:
			<br />
			<input type="text" name="appointment" />
			<br /><br />

			
			Appointment Date:
			<br />
			<input type="date" name="appointment_date" class="date" />
			<br /><br />
			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

			<input type="submit" value="Save" />
		</form>
	</div>
@endsection