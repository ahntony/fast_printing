<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @if(isset($title))
            {{ $title }}
        @endif  
    </title>


	<link rel="stylesheet" href="{{ asset('app.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}"/>

</head>
<body>

    @include("nav")

    @yield("content")


</body>

	<script src="{{ asset('js/bootstrap.bundle.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/bootstrap.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>