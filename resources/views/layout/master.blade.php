<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    
        <!-- Font awesome -->
        <link href="{{ URL::asset( 'frontend/css/font-awesome.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ URL::asset( 'frontend/css/bootstrap.css')}}" rel="stylesheet">   
        <!-- SmartMenus jQuery Bootstrap Addon CSS -->
        <link href="{{ URL::asset( 'frontend/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
        <!-- Product view slider -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'frontend/css/jquery.simpleLens.css')}}">    
        <!-- slick slider -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'frontend/css/slick.css')}}">
        <!-- price picker slider -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'frontend/css/nouislider.css')}}">
        <!-- Theme color -->
        <link id="switcher" href="{{ URL::asset( 'frontend/css/theme-color/default-theme.css')}}" rel="stylesheet">
        <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
        <!-- Top Slider CSS -->
        <link href="{{ URL::asset( 'frontend/css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">
        
        <!-- Main style sheet -->
        <link href="{{ URL::asset( 'frontend/css/style.css')}}" rel="stylesheet">    
        
        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        
    @yield('styles')
</head>

<body>
@yield('content')  

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset( 'frontend/js/bootstrap.js')}}"></script>  
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{ URL::asset( 'frontend/js/jquery.smartmenus.js')}}"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="{{ URL::asset( 'frontend/js/jquery.smartmenus.bootstrap.js')}}"></script>  
    <!-- To Slider JS -->
    <script src="{{ URL::asset( 'frontend/js/sequence.js')}}"></script>
    <script src="{{ URL::asset( 'frontend/js/sequence-theme.modern-slide-in.js')}}"></script>  
    <!-- Product view slider -->
    <script type="text/javascript" src="{{ URL::asset( 'frontend/js/jquery.simpleGallery.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset( 'frontend/js/jquery.simpleLens.js')}}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{ URL::asset( 'frontend/js/slick.js')}}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{ URL::asset( 'frontend/js/nouislider.js')}}"></script>
    <!-- Custom js -->
    <script src="{{ URL::asset( 'frontend/js/custom.js')}}"></script> 
@yield('scripts')    
</body>
</html>