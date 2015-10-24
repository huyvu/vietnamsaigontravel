@extends('layout.main')

@section('page-content')
	<div class="imgsub">
		{!! HTML::image('slideshow/1413603891-booking.jpg', 'BOOKING TOUR', ['class' => 'img-responsive']) !!}
		@include('module.findyourstrip')
	</div>
	<div class="container" id="reviews">
		<h1 class="page-title">TRAVELLER'S REVIEWS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="{{ url() }}" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="{{ url('customized-tours') }}" class="active">
				<span itemprop="title">Travellers reviews</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<section class="about">
				    <div class="testimonial-script"><span>Suggestions/Comments</span>
				        <p><strong>For any suggestions or comments, please email us at:&nbsp;<a title="Email contact" href="mailto:{{ Config::get('myconfig.MAIL_INFO') }}">{{ Config::get('myconfig.MAIL_INFO') }}</a></strong>
				        </p>
				        <div class="write-form">
				            {!! Form::open(['route' => 'tour-reviews.store', 'role' => 'form', 'class' => 'validate form-horizontal', 'id' => 'frmReview', 'name' => 'frmReview', 'enctype' => 'multipart/form-data']) !!}
		                    <div class="form-group">
		                    	<div class="col-sm-2">
			                        <label for="full_name">Full name (*)</label>
		                    	</div>
		                    	<div class="col-sm-6">
			                        {!! Form::text('full_name', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
		                    	</div>
		                    </div>
		                    <div class="form-group">
			                    <div class="col-sm-2">
			                        <label for="nationality">Country</label>
			                    </div>
			                    <div class="col-sm-6">
			                        {!! Form::select('nationality', array_combine(nation_array(),nation_array()) , '-- [Select] --', ['class' => 'form-control', 'id' => 'nationality']) !!}
			                    </div>
		                    </div>
		                    <div class="form-group">
			                    <div class="col-sm-2">
			                        <label for="email">Email (*)</label>
			                    </div>
			                    <div class="col-sm-6">
			                        {!! Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required']) !!}
			                    </div>
		                    </div>
		                    <div class="form-group">
				            	<div class="col-sm-2">
					            	<label for="content">Message (*)</label>
				            	</div>
				            	<div class="col-sm-6">
				            		{!! Form::textarea('content', null, ['class' => 'form-control', 'rows'=>'5']) !!}
				            	</div>
				            </div>
		                    <!--<p><label for="attachment">File Attach</label><input name="attachment" type="file"></p>-->
		                    <div class="form-group">
			                    <div class="col-sm-offset-2 col-sm-2">
			                        <input class="btn btn-main btn-orange" type="submit" name="SubmitTesti" id="SubmitTesti" value="Submit">
			                    </div>
		                    </div>
				                <div class="ajax-message"><i class="waiting">&nbsp;</i>
				                    <p class="waiting-text">Sending...</p>
				                </div>
				            {!! Form::close() !!}
				        </div>
				    </div>
				</section>
			</div>

			<div class="clearfix"></div>

			<div class="testimonial-list">
				@foreach($reviews as $review)
				<div class="col-sm-3">
					<div class="testimonial-item">
						<a href='{{ url("tour-reviews/$review->id")}}' title="View comments">
							<img src="{{ $review->avatar }}" alt="{{ $review->full_name }}" class="img-responsive">
						</a>
						<h3>
							<a href="{{ url('tour-reviews/$review->id' )}}" title="View comments">{{ $review->full_name }} - {{ $review->nationality }}</a>
						</h3>
						<p class="testmin">{{ str_limit($review->content, 150) }}</p>
					</div>
				</div>
				@endforeach
			</div><!-- .testimonial-list -->
		</div>
	</div>

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
			checkin.hide();
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
@stop