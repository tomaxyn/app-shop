<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ asset('img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title', 'IZI LLC')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->	    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

	<!-- CSS Files -->    
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />    
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet"/>
    
    
</head>

<body class="@yield('body-class')">
    <header class="header">
        <div class="headercontent">
            <a href="{{ url('/')}}">
            <img src="{{ asset('images/logoizi.jpg')}}" alt="IZI LLC logo" title="IZI LLC logo">
            </a>
        </div>
        <nav class="navbar navbar-absolute navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
            </div>

            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav">
                <li class=""><a href="{{ url('/yosoyelyo')}}">"Yo" soy el "Yo"</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acerca de nosotros</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ url('/acercade')}}">Nosotros</a></li>
                    <li><a href="{{ url('/cooreinstr')}}">Instructores Coordinadores</a></li>
                    <li><a href="{{ url('/instructor')}}">Biografias</a></li>                    
                    <li><a href="{{ url('/afiliado')}}">Afiliados</a></li>                    
                    <li><a href="{{ url('/boletin')}}">Boletin Informativo</a></li>
                    <li><a href="#">Articulos</a></li>
                    <li><a href="#">Testimonios</a></li>
                    <li><a href="{{ url('/videos')}}">Videos</a></li>                   
                    <li><a href="{{ url('/quienesta')}}">¿Quién está a cargo?</a></li>

                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Información de clases</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ url('/listacom')}}">Lista completa de clases SITH®</a></li>
                    <li><a href="{{ url('/basic1area')}}">Programa básico I</a></li>
                    <li><a href="#">Programa básico II</a></li>                    
                    <li><a href="#">Ho'oponopono de negocios</a></li>                    
                    <li><a href="#">Ho'oponopono de salud</a></li>
                    <li><a href="#">Programa de clases En-línea</a></li>
                    <li><a href="#">Ausente a lo largo del mundo</a></li>
                    <li><a href="{{ url('/informa')}}">Tarifas e información</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('/lapazdelyo')}}">La Paz del "Yo"</a></li>
                  @guest                            
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('login') }}"> Ingresa</a></li>
                                     
                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Salir</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                            {{ csrf_field()}}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest                   
              </ul>
               
        </div>
    </nav>   
    </header>
	 

    <div class="wrapper">
        @yield('content')    
    </div>

      <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Sobre nosotros</h5>
                    <ul>
                        <li><a href="{{ url('/acercade')}}">Nosotros</a></li>
                        <li><a href="{{ url('/cooreinstr')}}">Instructores Coordinadores</a></li>
                    <li><a href="{{ url('/instructor')}}">Biografias</a></li>                    
                    <li><a href="{{ url('/afiliado')}}">Afiliados</a></li>                    
                    <li><a href="{{ url('/boletin')}}">Boletin Informativo</a></li>
                    <li><a href="#">Articulos</a></li>
                    <li><a href="#">Testimonios</a></li>
                    <li><a href="{{ url('/videos')}}">Videos</a></li>                    
                    <li><a href="{{ url('/quienesta')}}">¿Quién está a cargo?</a></li>
                    </ul>
                </div>     
                       
                <div class="col-md-4">
                    <h5>Información de las clases</h5>
                    <ul>
                        <li><a href="{{url('/listacom')}}">Lista completa de clases SITH®</a></li>
                    <li><a href="{{ url('/basic1area')}}">Programa básico I</a></li>
                    <li><a href="#">Programa básico II</a></li>                    
                    <li><a href="#">Programa de Ho'oponopono de negocios</a></li>
                    
                    <li><a href="#">Programa de Ho'oponopono de salud</a></li>
                    <li><a href="#">Programa de clases En-línea</a></li>
                    <li><a href="#">Ausente a lo largo del mundo</a></li>
                     <li><a href="{{ url('/informa')}}">Tarifas e información</a></li>
                    </ul>
                </div>               
                
                <div class="col-md-4">
                    <h5>FAMILIA HO'OPONOPONO</h5>
                    <ul>
                        <li><a href="http://ihhl-ceeport.com/" target="_blank">Ceeport® | Ihaleakala</a></li>
                        <li><a href="http://www.self-i-dentity-through-hooponopono.com/" target="_blank">IZI LLC</a></li>
                        <li><a href="http://zero-wise.com/morrnah-nalamaku-simeona/" target="_blank">Morrnah Nalamaku Simeona</a></li>
                        <li><a href="http://www.krfoodsthatbreathe.com/" target="_blank">KR Foods That Breathe</a></li>
                        <li><a href="http://zerolag.biz/" target="_blank">MSKR (ZeroLag.biz)</a></li>
                        <li><a href="http://hooponopono-asia.org/tw/" target="_blank">Ho’oponopono Asia</a></li>
                        <li><a href="http://zero-wise.com/" target="_blank">Zero-Wise</a></li>
                        <li><a href="#" class="maillist" target="_blank"><i class="fa fa-envelope"></i>  Unete a nuestra lista de correo</a></li>
                        <li><a href="{{ url ('/')}}" class="rehome"><i class="fa fa-home"></i>  Pagina inicial</a></li>
                    </ul>
                </div>
                
            </div>           
        </div>    
         <div class="second-bar">
           <div class="container">
                <div class="logo"><a href="{{ url('/')}}"><img src="{{ asset('images/logo2.png')}}" /></a></div>
                <div class="searchpage">
                    
                </div>
                <div class="reseright">
                    ©2017 Zero-Wise, Inc.
                        Derechos reservados
                        <a href="http://zero-wise-espanol.com/privacy" target="_blank">Privacy Policy</a>
                </div>
            </div>
        </div>  
    </footer>
    </body>
<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset ('js/bootstrap.min.js')}}" type="text/javascript"></script>
	
</html>
