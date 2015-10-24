<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="http://gmpg.org/xfn/11" rel="profile">
	<link href="{{ asset('xmlrpc.php') }}" rel="pingback">
	<title>@yield('title')</title>
	<meta content="noodp,noydir" name="robots">
	<meta content="@yield('description')" name="description">
	<meta content="@yield('keywords')" name="keywords">
	<link href="" rel="canonical">
	<link href="{{ URL::to('/') }}" rel="next">
	<meta content="vi_VN" property="og:locale">
	<meta content="website" property="og:type">
	<meta content="@yield('title')" property="og:title">
	<meta content="@yield('description')" property="og:description">
	<meta content="{{ URL::to('/') }}" property="og:url">
	<meta content="Vietnam Travel" property="og:site_name">

	{!! HTML::style('bootstrap.min.css') !!}
	{!! HTML::style('font-awesome.min.css') !!}
	{!! HTML::style('style.css') !!}
	{!! HTML::style('responsive.css') !!}

	{!! HTML::script('jquery.min.js') !!}
	{!! HTML::script('bootstrap.min.js') !!}

	{{-- Facebook api --}}

</head>
<body>
	@include('module.header')

	<div class="wapper">
		@yield('page-content')
	</div>

	@include('module.footer')
</body>
</html>