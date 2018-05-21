@extends('layouts.app1')

@section('title', 'Acerca de IZI LLC')

@section('body-class', 'fronts-page')

@section('content')
 
<div class="main main-raised">            
       <div class="container">
            <img src="images/mainmiddle.jpg" class="headerimg1"/>
            <h2 class="coorina">LISTA COMPLETA DE CLASES SITH®</h2>            
        <div class="row">
              <div class="col-md-5">
                <p>Para inscribirse en las clases de SITH®: Vaya a la Agenda básico I o la Clase Negocios y haga clic en el folleto y / o enlace de la clase a la que desea asistir.</p>
<p>Para inscribirse en las clases de Asia SITH®: Vaya a la página de Programación básico I o Programación de la clase Negocios y haga clic en el enlace de la clase a la que desea asistir o vaya a la página Contacto en los EE. UU. Para obtener información por correo electrónico.</p>
<p>Haga clic aquí para obtener una nota sobre el <button type="button" class="btn btn-primary btn-link" data-toggle="modal" data-target="#myModal">
  calendario 2018
</button></p>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$cal[0]->name}}</h4>
      </div>
      <div class="modal-body">
        {!! $cal[0]->content !!}
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<p><strong>Todas las clases SITH® enumeradas a continuación son clases Básico I a menos que se indique lo contrario.</strong></p>
            </div>
             <div class="col-md-5 col-md-offset-1">
              <p>TENGA EN CUENTA: solo IZI LLC está autorizada a coordinar y enseñar el Self I-Dentity a través de Ho'oponopono®. Nadie más está autorizado para enseñar este exclusivo sistema de auto-identición a través de Ho'oponopono®. Los materiales están protegidos por derechos de autor y las leyes de derechos de autor son efectivas. Es nuestra responsabilidad informarle que cualquier mal uso y abuso de los materiales de Self I-Dentity a través de Ho'oponopono® tendrá consecuencias negativas.</p>
<p><a href="{{ url('/disclaim')}}" target="_blank">Haga clic aquí para ver el descargo de responsabilidad y el acuerdo de registro.</a></p>

            </div>
        </div>  
        <div class="row">
          <div class="col-md-12">
            @php
             $prim = $events[0]->fecha;
            @endphp
             <div class="resmes"> {{ $meses[($prim->month)-1]->month}}</div>
            @foreach($events as $event)
              <div class="evento">                            
                @if(!($event->fecha->isSameMonth($prim)))
                <div class="resmes"> {{ $meses[($event->fecha->month)-1]->month}}</div>                
                @endif
                <button type="button" class="btn btn-primary btn-link" data-toggle="modal" data-target="#{{ $event->id}}" >{{ $event->fecha->day}} & {{$event->fecha->addDay()->day}} {{ $event->Ciudad}} {{ $countrys[$event->country-1]->name}} {{$event->clase}}</button>
                <div class="modal fade" id="{{ $event->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{ $meses[($event->fecha->month)-1]->month}} {{ $countrys[$event->country-1]->name}} - {{ $event->Ciudad}}</h4>
                      </div>
                      <div class="modal-body">
                        <img src="{{ asset('images/1/Instructores/cal.png')}}" class="descpicon"/>
                        <div class="conte">Fecha: {{ $event->fecha->day}} & {{$event->fecha->addDay()->day}} {{ $event->Ciudad}} {{ $countrys[$event->country-1]->name}}</div><br>
                        <img src="{{ asset('images/1/Instructores/locat_9.png')}}" class="descpicon"/>
                       
                         <div class="conte">Locación: {{ $event->location['name'] }} <br>
                                            Dirección: {{ $event->location['address']}}<br>
                                            Telefono: {{ $event->location['phone']}}
                         </div><br>
                        <img src="{{ asset('images/1/Instructores/hotel9b80.png')}}" class="descpicon"/>
                        <div class="conte">Pagina web: {{ $event->location['web'] }}</div><br>  
                         <img src="{{ asset('images/1/Instructores/board.png')}}" class="descpicon"/>
                          <div class="conte">Instructor: {{ $event->coolaborator['instructor'] }} <br>
                                            Coordinador: {{ $event->coolaborator['coordinator']}}<br>
                                            Traductor: {{ $event->coolaborator['traductor']}}
                         </div><br>
                       <img src="{{ asset('/images/1/Instructores/downloadd913.png')}}" class="descpicon"/>
                        <div class="conte"><a href="{{ $event->inforesource['document']}}">Flyer en word:</a></div><br>
                         <img src="{{ asset('/images/1/Instructores/information.png')}}" class="descpicon"/>
                         <div class="conte"><a href="{{ $event->inforesource['web']}}" target="_blank">Web page oficial del pais:</a><br>
                          <a href="{{ $event->inforesource['regext']}}" target="_blank">Registro externo</a>
                         </div><br>

                         @if($event->country == 1)
                         <i class="fa fa-address-card icon-reg"></i>
                         <div class="conte"><a href="{{ route('register')}}">Registro interno</a></div><br>
                         @endif
                         
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>       
                      </div>
                    </div>    
                  </div>
                </div>
              </div>
               @php
             $prim = $event->fecha;
            @endphp
            @endforeach
          </div>
        </div>    
        <!-- Button trigger modal -->
    </div>            
</div>
      

@endsection

