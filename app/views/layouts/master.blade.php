<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.tagsinput.css">
	<link rel="stylesheet" type="text/css" href="/css/stylesheet.css">
	<link rel="shortcut icon" href="/img/Arches v2-6.jpg" />
	@yield('top-script')
</head>
<body>
	<!-- navbar -->
	@include('layouts.partials.navbar')
	<!-- end navbar -->

	<div class='container main-container'>

    	@if (Session::has('successMessage'))
		    <div class="alert alert-success dif-col">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
		@endif

		@yield('content')

	</div>

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='/js/jquery.tagsinput.min.js'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="/js/youtube-autoresizer.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-50277312-3', 'auto');
		ga('send', 'pageview');
	</script>
	@yield('bottom-script')
</body>
</html>