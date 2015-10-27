@extends('layout.main')
{{-- Start head --}}
@section('title')
    {{ $title }}
@stop
@section('description')
    {{ $description }}
@stop
@section('keywords')
    {{ $keywords }}
@stop
{{-- End head --}}

@section('page-content')
    <div id="carousel-example-generic" class="carousel slide slidehome" data-ride="carousel">
	  	<!-- Indicators -->
		<ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
		</ol>

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		    <div class="item active">
				{!! HTML::image('slideshow/tours-in-vietnam-11-days.jpg', 'Tours Vietnam in 11 Days') !!}
		    </div>
		    <div class="item">
			    {!! HTML::image('slideshow/halongbay-4days.jpg', 'HaLong Bay in 4 Days') !!}
		    </div>
		    <div class="item">
				{!! HTML::image('slideshow/mekong-2days.jpg', 'Explore Mekong Delta in 2 Days') !!}
		    </div>
		    <div class="item">
			    {!! HTML::image('slideshow/sapa-4days.jpg', 'Discovery Northwest Vietnam in 4 Days') !!}
		    </div>
		    <div class="item">
			    {!! HTML::image('slideshow/vietnam-holiday-package-9days.jpg', 'Tours Vietnam holiday Packages in 9 Days') !!}
		    </div>
		</div>

		<!-- Controls -->
		  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
		  	</a>
		  	<div class="tips">
			   	<div class="container wphomes">
			      	<div class="searchbox-black toogle-search">
			         	<p class="search-head">Find Your Trip</p>
			         	<form method="get" action="{{ url('search') }}" id="frmSearch" class="form-horizontal" name="frmSearch">
			            <ul>
			               	<li>
			                  	<label>Destinations</label>
			                  	<select id="slDestination" name="slDestination" class="form-control">
			                     	<option value="1">-- [Vietnam Destinations] --</option>
		                     		@foreach($destinations as $destination) 
		                     			<option value="{{ $destination->name }}">{{ $destination->name }}</option>
		                     		@endforeach 
			                  
			                  	</select>
							</li>
							<li>
								<label for="slDuration">Trip Duration</label>
								<select id="slDuration" name="slDuration" class="form-control">
									<option value="-1">-- [All] --</option>
									<option value="1 - 2">1 - 2 days</option>
									<option value="2 - 5">2 - 5 days</option>
									<option value="6 - 12">6 - 12 days</option>
									<option value="13 -&gt;">13 -&gt; days</option>
								</select>
							</li>
							<li>
								<label for="slPrice">Price</label>
								<select id="slPrice" name="slPrice" class="form-control">
									<option value="-1">-- [All] --</option>
									<option value="100 - 300">100 - 300 USD</option>
									<option value="200 - 500">200 - 500 USD</option>
									<option value="500 - 1000">500 - 1000 USD</option>
									<option value="1000 -&gt;">&gt; 1000 USD</option>
									</select>
							</li>
			               	<li class="lsearchlast">
			               		<input type="submit" onclick="return validate();" class="btn btn-main btn-orange" value="Search" id="Submit" name="Submit">
			               	</li>
			            </ul>
			        </form>
			    </div>
			</div>
		</div>
	</div>
	<div class="tips2">
		<div class="container">
	   		<div class="row">
	   			<div class="col-sm-3">
	   				<a class="tips-group booknow" title="Book tour now" href="#tailor-made-tour">
	   					Design Your Own Trip<span>Create your plan trip and send request.</span>
	   				</a>
	   			</div>
	   			<div class="col-sm-3">
	   				<a class="tips-group chat" title="Chat online with our experts" href="tel:+84902626729">
	   				 	+84 902 626 729<span>Discuss with our experts - Support 24/7.</span>
	   				</a>
	   			</div>
	   			<div class="col-sm-6 social socialhome">
	   				@include ('module.social')
	   			</div>
	   		</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="wphome-full">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<section class="traveldes">
						<h2 class="margin-top">Travel Destinations</h2>
						<div class="row">
							<div class="col-sm-6">
								<a href="{{ URL::to('travel-to-vietnam') }}" title="VIETNAM TOURS">
									{!! HTML::image('tours/h-vietnam.jpg', 'Vietnam travel', ['class' => 'img-responsive']) !!}
								</a>
								<h3 class="f18">
									<a href="{{ URL::to('travel-to-vietnam') }}" title="Tours in vietnam" class="decoration">Tours in Vietnam</a>
								</h3>
								<ul>
									@foreach($tours as $tour)
										<li>
											<a href="{{ url('vietnam/detail'.$tour->alias) }}" title="{{ $tour->name.' - '.$tour->duration.' Days' }}">» {{ $tour->name.' - '.$tour->duration.' Days' }}</a>
										</li>
									@endforeach
								</ul>
							</div>
							<div class="col-sm-6">
								<a href="{{ URL::to('vietnam-day-tours') }}" title="Day Tours in Vietnam">
									{!! HTML::image('tours/popular-destinations.jpg', 'Popular Destinations', ['class' => 'img-responsive']) !!}
								</a>
								<h3 class="f18">
									<a href="{{ URL::to('vietnam-day-tours') }}" title="Popular Tours" class="decoration">Popular Destinations</a>
								</h3>
								<ul>
									<li>
										<a href="{{ url('vietnam/destination/sapa') }}" title="Sapa">» Sapa</a>
									</li>
									<li>
										<a href="{{ url('vietnam/destination/ha-long') }}" title="Halong Bay">» Halong Bay</a>
									</li>
									<li>
										<a href="{{ url('vietnam/destination/hoi-an') }}" title="Hoi An">» Hoi An</a>
									</li>
									<li>
										<a href="{{ url('vietnam/destination/ha-noi') }}" title="Hoi An">» Ha Noi</a>
									</li>
									<li>
										<a href="{{ url('vietnam/destination/ho-chi-minh') }}" title="Ho Chi Minh City">» Ho Chi Minh City</a>
									</li>
									<li>
										<a href="{{ url('vietnam/destination/mekong-delta') }}" title="Mekong Delta">» Mekong Delta</a>
									</li>
								</ul>
							</div>
						</div>
					</section>
					<section class="traveldes">
						<h2>Other Tours</h2>
						<a href="{{ URL::to('vietnam-day-tours') }}" title="Day Tours in Vietnam">
							{!! HTML::image('tours/daytours-home.jpg', 'Day Tours in Vietnam', ['class' => 'img-responsive']) !!}
						</a>
						<h3 class="f18">
							<a href="{{ URL::to('vietnam-day-tours') }}" title="Vietnam Day Tours" class="decoration">Vietnam Day Tours</a>
						</h3>
						<ul class="half-list">
							@foreach($day_tours as $day)
								<li>
									<a href="{{ url('vietnam/detail'.$day->alias) }}" title="{{ $day->name }}">» {{ $day->name }}</a>
								</li>
							@endforeach
						</ul>
						<a href="{{ URL::to('amazing-race-tour') }}" title="Vietnam Game Tour">
							{!! HTML::image('tours/Vietnam-Game-Tour.jpg', 'Vietnam Game Tour', ['class' => 'img-responsive']) !!}
						</a>
					</section>
					<div class="row">
						<div class="col-sm-12 blog-home">
							<h2>What Client’s Say</h2>
							@foreach($reviews as $review)
								<div class="row">
									<div class="col-cus-2">
										<a target="_blank" href="{{ URL::to('tour-reviews'.$review->id) }}" title="Tour reviews: {{ $review->review_title }}">
											<img src="{{ $review->avatar }}" alt="{{ $review->full_name }}" class="img-responsive">
										</a>
									</div>
									<div class="col-cus-8 pd-lf">
										<a href="{{ URL::to('tour-reviews'.$review->id) }}" title="Tour reviews: {{ $review->review_title }}">{{ $review->full_name.' - From: '.$review->nationatily }}</a>
										<p>{{ str_limit($review->content, $limit = 150, $end = '...') }}</p>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<section id="tailor-made-tour" class="design-home">
						<h2 class="margin-top">Create Your Own Trip</h2>
						<p class="plan-tip">Create your plan trip and send request.</p>
						{!! Form::open(['url' => 'customized-tours', 'role' => 'form', 'class' => 'validate form-horizontal', 'name' => 'frmTourRequest', 'id' => 'frmTourRequest', 'enctype' => 'multipart/form-data']) !!}
						   <fieldset>
						      	<legend>Your Information</legend>
						      	<div class="form-group">
						      		<div class="col-sm-12">
							      		<label for="ctxtCountry" class="label-control">Nationality <i>*</i></label>
							            {!! Form::select('nationality', array_combine(nation_array(),nation_array()) , '-- [Select] --', ['class' => 'form-control', 'id' => 'nationality']) !!}
						      		</div>
						      	</div>
						      	<div class="form-group">
						      		<div class="col-sm-6 pd-rg">
						      			<label for="ctxtSex">Title <i>*</i></label>
							            {!! Form::select('gender', [
											'Mr.'         => 'Mr',
											'Ms.'         => 'Mss',
											'Mrs.'        => 'Mrs',
											'Dr.'         => 'Dr.',
											'Prof.'       => 'Prof.',
											'Mstr.'       => 'Mstr.'
										], null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
						      		</div>
						      		<div class="col-sm-6 pd-lf">
						      			<label for="ctxtName">Full Name <i>*</i></label>
						      			{!! Form::text('first_name', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
						      		</div>
						      	</div>
						      	<div class="form-group">
						      		<div class="col-sm-6 pd-rg">
						      			<label for="ctxtEmail">Email <i>*</i></label>
						      			{!! Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required,email', 'id' => 'email']) !!}
						      		</div>
						      		<div class="col-sm-6 pd-lf">
						      			<label for="ctxtComfirmEmail">Confirm Email <i>*</i></label>
						      			{!! Form::text('email_confirm', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
						      		</div>
						      	</div>
						      	<div class="form-group">
						      		<div class="col-sm-6 pd-rg">
						      			<label for="ctxtPhone">Cell/ Mobile</label>
							            <?php $phoneCodes = array_combine(nation_phone_code_array(), nation_phone_array()) ?>
					         			{!! Form::select('phoneCode', $phoneCodes, '--- [Select] ---', ['class' => 'form-control']) !!}
						      		</div>
						      		<div class="col-sm-6 pd-lf">
						      			<label for="ctxtPhone">Number</label>
						      			{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'E.g: +84988167702']) !!}
						      		</div>
						      	</div>
						      	<div class="form-group">
						      		<div class="col-sm-12">
						      			<label for="txtPayment">Payment method<i>*</i></label>
							            {!! Form::select('payment_method', [
											'Wire Transfer/Bank Transfer'         => 'Wire Transfer/Bank Transfer',
											'Credit Card'                         => 'Credit Card',
											'Credit Card Form'                    => 'Credit Card Form',
											'Transfer Money Online'               => 'Transfer Money Online.',
											'Deposit'                             => 'Deposit.',
											'Other'                               => 'Other.'
										], '--- [Select] ---', ['class' => 'form-control', 'data-validate' => 'required']) !!}
						      		</div>
						      	</div>
						   </fieldset>
						   <fieldset>
							    <legend>Destination(s) to visit</legend>
							    <div class="lbl-chk0">
						         	<h3 class="margin-top">Vietnam</h3>
						         	<div class="form-group">
										@for($i=0; $i < sizeof($destinations); $i++)
											@if($i % 10 == 0)
												@if($i!=0)
												</div></div>
												@endif
												<div class="col-sm-4">
													<div class="form-block">
											@endif
											<label>
												<input type="checkbox" name="destinations[]" value="{{ $destinations[$i]->name }}" class="cbr cbr-done">
												{{ $destinations[$i]->name }}
											</label>
											<br>

											@if($i == sizeof($destinations))
												</div></div>
											@endif
										@endfor
									</div>
						      	</div>
						   	</fieldset>
						   	<fieldset class="chk3">
						      	<legend>Reservation Trip Details</legend>
								<div class="form-group">
									<div class="col-sm-6 pd-rg">
										<label class="lbdate">Date of arrival <i>*</i></label>
										{!! Form::text('arrival_date', null, ['class' => 'form-control', 'readony' => 'readonly', 'id' => 'arrival_date']) !!}
									</div>
									<div class="col-sm-6 pd-lf">
										<label class="lbdate">Date of departure <i>*</i></label>
										{!! Form::text('departure_date', null, ['class' => 'form-control', 'readony' => 'readonly', 'id' => 'departure_date']) !!}
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 pd-rg">
										<label class="lbdur" for="ctxtDuration">Duration <i>*</i></label>
							            {!! number_list('duration',['class' => 'form-control', 'id' => 'duration'], '--- [Select] ---', 21, true, 'Days', null) !!}
									</div>
									<div class="col-sm-6 pd-lf">
										<label for="cbArrivalPort">Arrival port <i>*</i></label>
							            {!! Form::select('arrival_port', [
											'Hanoi Capital - Vietnam'    => 'Hanoi Capital - Vietnam',
											'Danang City - Vietnam'      => 'Danang City - Vietnam',
											'Ho Chi Minh City - Vietnam' => 'Ho Chi Minh City - Vietnam',
										], '--- [Select] ---', ['class' => 'form-control', 'data-validate' => 'required', 'id' => 'arrival_port']) !!}
							        </div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 pd-rg">
										<label for="ctxtHotel">Hotel class <i>*</i></label>
							            {!! Form::select('hotel_class', [
											'3 Stars'   => '3 Stars',
											'4 Stars'   => '4 Stars',
											'5 Stars'   => '5 Stars',
											'Book By Myself' => 'Book By Myself'
										], '--- [Select] ---', ['class' => 'form-control', 'id' => 'hotel_class']) !!}
									</div>
									<div class="col-sm-6 pd-lf">
										<label for="txtHotelName">Or Hotel name</label>
										{!! Form::text('hotel_name', null, ['class' => 'form-control', 'id' => 'hotel_name']) !!}
									</div>
								</div>
								<div class="form-group fr-group">
									<div class="col-sm-12 pd-rg pd-lf">
										<label for="txtRoom1">Room preference:</label>
									</div>
									<div class="col-sm-3 pd-rg pd-lf">
							            {!! number_list('single',['class' => 'form-control'], '-- [Single] --', 20, false, null, null) !!}
									</div>
									<div class="col-sm-3 pd-rg pd-lf">
										{!! number_list('double',['class' => 'form-control'], '-- [Double] --', 20, false, null, null) !!}
									</div>
									<div class="col-sm-3 pd-rg pd-lf">
										{!! number_list('twin',['class' => 'form-control'], '-- [Twin] --', 20, false, null, null) !!}
									</div>
									<div class="col-sm-3 pd-rg pd-lf">
										{!! number_list('triple',['class' => 'form-control'], '-- [Triple] --', 20, false, null, null) !!}
							        </div>
								</div>
								<div class="form-group fr-group">
									<div class="col-sm-12 pd-rg pd-lf">
										<label for="ctxtAdults">Total Number of Travelers <i>*</i></label>
									</div>
									<div class="col-sm-4 pd-rg pd-lf">
										{!! number_list('adults',['class' => 'form-control'], '--- [Adults] ---', 20, true, null, null) !!}
									</div>
									<div class="col-sm-4 pd-rg pd-lf">
										{!! number_list('children',['class' => 'form-control'], '--- [Children] ---', 20, true, null, null) !!}
									</div>
									<div class="col-sm-4 pd-rg pd-lf">
										{!! number_list('babies',['class' => 'form-control'], '--- [Babies] ---', 20, true, null, null) !!}
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label for="ctxtInformation">Other Information</label>
										{!! Form::textarea('comment', null, ['class' => 'form-control', 'rows'=>'3']) !!}
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="checkbox" checked="checked" id="copyemail" name="copyemail">
										<label class="copy-email" for="copyemail">Send copy to yourself</label>
									</div>
								</div>
						   	</fieldset>
						   	<input type="submit" value="Send Request" id="btnSubmitCustom" name="btnSubmitCustom" class="btn btn-main btn-orange">
						{!! Form::close() !!}
					</section>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
@stop
@section('footer-script')
	@include('module.datepicker.date')
	<script>
	    var nowTemp = new Date();
    	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    	var checkin = $('#arrival_date').datepicker({
    		format: 'dd/mm/yyyy',
      		onRender: function(date) {
        		return date.valueOf() < now.valueOf() ? 'disabled' : '';
      		}
    	}).on('changeDate', function(ev) {
      		if (ev.date.valueOf() > checkout.date.valueOf()) {
	        	var newDate = new Date(ev.date)
	        	newDate.setDate(newDate.getDate() + 1);
	        	checkout.setValue(newDate);
      		}checkin.hide();
      		$('#departure_date')[0].focus();
    	}).data('datepicker');
    		var checkout = $('#departure_date').datepicker({
    			format: 'dd/mm/yyyy',
      			onRender: function(date) {
        		return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
      		}
    	}).on('changeDate', function(ev) {
     		checkout.hide();
    	}).data('datepicker');
	</script>

	{!! HTML::script('jquery.validate.min.js') !!}
	<script>
		$( "#frmTourRequest" ).validate({
		  rules: {
		  	nationality : "required",
		  	first_name : "required",
		  	last_name : "required",
		    email: {
		    	required: true,
			    email: true
		    },
		    email_confirm: {
		    	required: true,
			    email: true,
		    	equalTo: "#email"
		    },
		    phone : {
		    	required: true,
		    	digits: true
		    },

		    arrival_port : "required",
		    arrival_date : "required",
		    departure_date : "required",
		    duration : "required",
		    adults : "required"
		  }
		});
	</script>
@stop