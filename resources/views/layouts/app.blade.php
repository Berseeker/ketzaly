<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boda Chinos & Pablito') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Library CSS -->
    <link href="{{ asset('css/glanz_library.css') }}" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="{{ asset('fonts/themify-icons.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('css/glanz_style.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700%7COpen+Sans:300,400,700%7CPlayfair+Display:400,400i,700,700i" rel="stylesheet">

    <!-- Other Fonts -->
    <link href="{{ asset('fonts/marsha/stylesheet.css') }}" rel="stylesheet">
    
    
</head>
<body class="gla_middle_titles">
    
    <div id="app">
        {{-- Include Page Content --}}
        @yield('content')     
       
    </div>
</body>

@yield('page-script')

<!-- JQuery -->
<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script> 
<!-- Library JS -->
<script src="{{ asset('js/glanz_library.js') }}"></script> 

<!-- Theme JS -->
<script src="{{ asset('js/glanz_script.js') }}"></script>

</html>
