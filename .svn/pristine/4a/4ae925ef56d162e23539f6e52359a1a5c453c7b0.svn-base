@extends('layout.admin')

@section('page-content')
<div class="page-title">
	<div class="title-env">
		<h1 class="title">Booking Detail</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tour Booking Information
			</div>
			<div class="panel-body">
				<p><strong>Tour name</strong>: {{ $booking->tour_name }}</p>
				<p><strong>Arrival date</strong>: {{ date('F, d Y', strtotime($booking->arrival_date)) }}</p>
				<p><strong>Departure date</strong>: {{ date('F, d Y', strtotime($booking->departure_date)) }}</p>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				Hotel Booking Information
			</div>
			<div class="panel-body">
				<p><strong>Hotel class</strong>: {{ $booking->hotel_class }}</p>
				@if(!empty($booking->hotel_name))
				<p><strong>Hotel name</strong>: {{ $booking->hotel_name }}</p>
				@endif
				<p><strong>Travelers</strong>:</p>
				<p>Adults: {{ $booking->adults }} - Children : {{ !empty($booking->children) ? $booking->children : '0' }} - Babies : {{ !empty($booking->babies) ? $booking->babies : '0' }}</p>
				<p><strong>Room references</strong>:</p>
				<p>Single: {{ !empty($booking->single) ? $booking->single : '0' }} 
				- Double : {{ !empty($booking->double) ? $booking->double : '0' }} 
				- Twin : {{ !empty($booking->twin) ? $booking->twin : '0' }}
				- Triple : {{ !empty($booking->triple) ? $booking->triple : '0' }}
				</p>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				Customer Information
			</div>
			<div class="panel-body">
				<p><strong>Fullname</strong>: {{ $booking->gender }}.{{ $booking->first_name }} {{ $booking->last_name }}</p>
				<p><strong>Nationality</strong>: {{ $booking->nationality }}</p>
				<p><strong>Email</strong>: {{ $booking->email }}</p>
				<p><strong>Phone number</strong>: {{ $booking->phone }}</p>
				<p><strong>Payment method</strong>: {{ $booking->payment_method }}</p>
				<p><strong>Message</strong>: </p>
				<p>{{ $booking->comment }}</p>
				
			</div>
		</div>
	</div>
</div>
@stop