@extends('layouts.app1')

@section('title', 'Coordinadores e instructores IZI LLC')

@section('body-class', 'fronts-page')

@section('content')
 
<div class="main main-raised">
 <div class="container">
            <img src="images/mainmiddle.jpg" class="headerimg1"/>
<h2 class="coorina">IZI LLC - BIOGRAFIA DE AFILIADOS</h2>
  <div class="row eqhei">
    @foreach($afiliados as $afiliado)
    <div class="col-md-6">       
             <div class="panel panel-default">
            <div class="col-md-3">                
              <img src= "{{asset('/images/1/instructores/'. $afiliado->image)}}" width="100%" />               
            </div>
            <div class="col-md-9">
                <div class="panel-heading">{{ $afiliado->name}}</div>
                  <div class="panel-body">
                    {!! $afiliado->biography!!}
                  </div>
                </div>
            </div>         
    </div>
    @endforeach
   </div> 
</div>
</div>

@endsection

