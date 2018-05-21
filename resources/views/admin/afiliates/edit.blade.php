@extends('layouts.appwef')

@section('title', 'IZI LLC | Afiliados')

@section('body-class', 'Afiliate-page')

@section('content')

<div class="main main-raised">           
  <div class="section">
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header text center">Afiliados</h2>
            </div>            
        </div>
        <div class="row">
            <div class="col-md-9">
               <h3>Editar datos Afiliado: {{ $afiliate->name}}<a href="{{ route('afiliates.index', $afiliate->id)}}" class="btn btn-default pull-right">Listado</a></h3>
                @include('admin.afiliates.fragment.error')
               {!! Form::model($afiliate, ['route' => ['afiliates.update', $afiliate->id], 'method' => 'PUT']) !!}
                 	@include('admin.afiliates.fragment.form')
               {!! Form::close() !!}
              
            </div>
            <div class="col-md-3">
                @include('admin.afiliates.fragment.aside')
            </div>
        </div>
    </div>    
  </div>        
</div>



@endsection