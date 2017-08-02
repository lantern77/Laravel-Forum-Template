<!doctype html>
<html lang="{{ config('app.locale') }}">
	<!-- Header -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('js/DataTables/datatables.css')}}"/>

    </head>
    <body>
    @include('layouts.partials.nav')   
	  <!-- Header End -->
    <div class="container theme-showcase" role="main">
        @yield('page-content')
    </div> <!-- /container -->

        <!-- Footer -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ URL::asset('js/jquery-1.12.4.min.js') }}" /></script>
        <script src="{{ URL::asset('js/jquery-ui.min.js') }}" /></script>

        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{URL::asset('js/DataTables/datatables.min.js')}}"></script>
        @yield('custom-javascripts')
	    <!-- Footer End -->
    </body>
</html>
