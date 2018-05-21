@extends('layouts.appwef')

@section('title', 'IZI LLC | Instructores')

@section('body-class', 'instruct-page')

@section('content')

<div class="main main-raised">           
  <div class="section">
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header text center">Instructores</h2>
            </div>            
        </div>
        <div class="row">
            <div class="col-md-9">
               <h3>Editar datos Instructor: {{ $instructor->name}}<a href="{{ route('instructors.index', $instructor->id)}}" class="btn btn-default pull-right">Listado</a></h3>
                @include('admin.instructors.fragment.error')
               {!! Form::model($instructor, ['route' => ['instructors.update', $instructor->id], 'method' => 'PUT']) !!}
                 	@include('admin.instructors.fragment.form')
               {!! Form::close() !!}
              
            </div>
            <div class="col-md-3">
                @include('admin.instructors.fragment.aside')
            </div>
        </div>
    </div>    
  </div>        
</div>



@endsection