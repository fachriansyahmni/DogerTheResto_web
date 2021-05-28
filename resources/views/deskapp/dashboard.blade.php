<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Doger Resto</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendor/deskapp/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendor/deskapp/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendor/deskapp/vendors/images/favicon-16x16.png') }}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/deskapp/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/deskapp/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/deskapp/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/deskapp/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/deskapp/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>

	@stack('css')
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src=" {{ asset('/vendor/deskapp/vendors/images/deskapp-logo.svg') }}" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Harap Tunggu ...
			</div>
		</div>
	</div>

	@include('layouts.dashboard.header')
	
	@include('layouts.dashboard.right-sidebar')

	@include('layouts.dashboard.left-side-sidebar')
	
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			@yield('main-content')
		</div>
	</div>
	<!-- js -->
	<script src="{{ asset('/vendor/deskapp/vendors/scripts/core.js')}}"></script>
	<script src="{{ asset('/vendor/deskapp/vendors/scripts/script.min.js')}}"></script>
	<script src="{{ asset('/vendor/deskapp/vendors/scripts/process.js')}}"></script>
	<script src="{{ asset('/vendor/deskapp/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{ asset('/vendor/deskapp/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{ asset('/vendor/deskapp/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('/vendor/deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('/vendor/deskapp/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('/vendor/deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('/vendor/deskapp/vendors/scripts/dashboard.js')}}"></script>

	@stack('script')
</body>
</html>