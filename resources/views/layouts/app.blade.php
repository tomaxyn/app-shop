<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon.png')}}">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title', 'IZI LLC | Dashboard')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->	
   	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

	<!-- CSS Files -->    
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />   
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet"/>
   
</head>

<body class="@yield('body-class')">
	<nav class="navbar navbar-absolute navbar-inverse">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="{{ url('/')}}"><img alt="Brand" src="{{ asset('img/logo1.png')}}" width="30px">
                    </a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
                            <li><a href="{{ route('login') }}"> Ingresa</a></li>
                            <li><a href="{{ route('register') }}">Registro</a></li>
                        @else
                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                    aria-expanded="false"><span class="caret"></span></a>

                                <ul class="dropdown-menu">  
                                 <li><a href="{{ route('home') }}"> Dashboard</a></li>                               
                                    <li>
                                        <a href="{{url('/logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Salir</a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="post" 
                                                    style="display: none;">
                                            {{ csrf_field()}}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif                  
        		</ul>
        	</div>
    	</div>
    </nav>
    
    <div class="wrapper">
        @yield('content')    
    </div>
   

    </body>
<!--   Core JS Files   -->
	<script src="js/jquery.min.js"></script>
	<script src="{{ asset ('js/bootstrap.min.js')}}" type="text/javascript"></script>
		


</html>
