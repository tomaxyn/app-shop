@extends('layouts.app1')

@section('title', 'Tarifas e informacion IZI LLC')

@section('body-class', 'fronts-page')

@section('content')

          

<div class="main main-raised">  
    <div class="container">    
          <img src="images/mainmiddle.jpg" class="headerimg1"/>
          <h2 class="coorina">CLASE BASICO I SITH® POR AREA GEOGRÁFICA</h2>
          <br>
          <div class="row">
              <div class="col-md-3">                        
                            <a href="{{ url('/')}}" class="btn btn-default btn-fee">Norteamérica</a>
                </div>
                <div class="col-md-3">
                      <a href="{{ url('/')}}" class="btn btn-default btn-fee">Suramérica</a>
                </div>
                <div class="col-md-3">
                     <a href="{{ url('/')}}" class="btn btn-default btn-fee">Europa</a>
                </div>
                 <div class="col-md-3">
                     <a href="{{ url('/')}}" class="btn btn-default btn-fee" style="font-size: 1.65rem;">Antigua Union sovietica</a>
                </div>
                           
          </div>
                <div class="row">
                    <div class="col-md-3">                        
                      <a href="{{ url('/')}}" class="btn btn-default btn-fee"  data-toggle="tooltip" data-placement="top" title="Política de cancelacion y reembolso">Asia</a>
                </div>
                <div class="col-md-3">
                      <a href="{{ url('/')}}" class="btn btn-default btn-fee" >Australia</a>
                </div>
                <div class="col-md-3">
                     <a href="{{ url('/')}}" class="btn btn-default btn-fee">Medio Oriente</a>
                </div>
                 <div class="col-md-3">
                     <a href="{{ url('/')}}" class="btn btn-default btn-fee" style="font-size: 2rem;">Clases en línea</a>
                </div>
                </div>
                        
        </div>       
</div>

@endsection
