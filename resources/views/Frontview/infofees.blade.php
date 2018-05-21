@extends('layouts.app1')

@section('title', 'Tarifas e informacion IZI LLC')

@section('body-class', 'fronts-page')

@section('content')

          

<div class="main main-raised">
    <div class="container">    
          <img src="images/mainmiddle.jpg" class="headerimg1"/>
          <h2 class="coorina">INFORMACIÓN Y TARIFAS</h2>
          <br>
          <div class="row">
              <div class="col-md-3">                        
                            <a href="{{ url('/')}}" class="btn btn-default btn-fee">Básico I</a>
                </div>
                <div class="col-md-3">
                      <a href="{{ url('/')}}" class="btn btn-default btn-fee">Básico II</a>
                </div>
                <div class="col-md-3">
                     <a href="{{ url('/')}}" class="btn btn-default btn-fee">Negocios</a>
                </div>
                 <div class="col-md-3">
                     <a href="{{ url('/')}}" class="btn btn-default btn-fee">Salud</a>
                </div>
                           
          </div>
                <div class="row">
                    <div class="col-md-3">                        
                      <a href="{{ url('/disclaim')}}" class="btn btn-default btn-fee" style="font-size: 0.8rem;" data-toggle="tooltip" data-placement="top" title="Acuerdo de descargo de responsabilidad y registro">Acuerdo de descargo de responsabilidad y registro</a>
                      <a href="{{ url('/canreem')}}" class="btn btn-default btn-fee" style="font-size: 1.1rem;"  data-toggle="tooltip" data-placement="top" title="Política de cancelacion y reembolso">Política de cancelacion y reembolso</a>
                </div>
                <div class="col-md-3">
                      <a href="{{ url('/derres')}}" class="btn btn-default btn-fee" style="font-size: 1.7rem;">Derechos reservados</a>
                </div>
                <div class="col-md-3">
                     <a href="{{ url('/')}}" class="btn btn-default btn-fee">On-Line</a>
                </div>
                 <div class="col-md-3">
                     <a href="{{ url('/')}}" class="btn btn-default btn-fee">WWA</a>
                </div>
                </div>
                        
        </div>

</div>


@endsection

