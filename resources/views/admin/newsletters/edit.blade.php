@extends('layouts.appwef')

@section('title', 'IZI LLC | Boletín')

@section('body-class', 'newsletter-page')

@section('content')

<div class="main main-raised">           
  <div class="section">
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header text center">Boletín</h2>
            </div>            
        </div>
        <div class="row">
            <div class="col-md-9">
               <h3>Editar datos Boletín: {{ $bolet->name}}<a href="{{ route('newsletters.index', $bolet->id)}}" class="btn btn-default pull-right">Listado</a></h3>
                @include('admin.newsletters.fragment.error')
               {!! Form::model($bolet, ['route' => ['newsletters.update', $bolet->id], 'method' => 'PUT']) !!}
                 	@include('admin.newsletters.fragment.form')
               {!! Form::close() !!}
              
            </div>
            <div class="col-md-3">
                @include('admin.newsletters.fragment.aside')
            </div>
        </div>
    </div>    
  </div>        
</div>



@endsection