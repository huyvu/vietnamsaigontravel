@extends('layout.main')

@section('page-content')
{!! HTML::style('magnific-popup.css') !!}
<div id="vietnam-tour-detail">
	<div class="slidehome">
		@include('module.findyourstrip')
	</div>

	<div class="container">
		<h1 class="page-title">NORTH VIETNAM TOURS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="#" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="#" class="active">
				<span itemprop="title">{{ $content->title }}</span>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9 col-sm-8">
				{!! $content->content !!}
			</div>

			<div class="col-md-3 col-sm-4 hidden-xs">
				@include('module.widget.support')

				@include('module.widget.tour_booking_guide')

				@include('module.widget.why_us')
			</div>
		</div>
	</div>
</div><!-- #vietnam-tour-detail -->
{!! HTML::script('jquery.magnific-popup.js') !!}
<script>
	$('.photos').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
	enabled: true
		},
	});
</script>
@stop