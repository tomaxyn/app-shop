@extends('layouts.app')

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
               <h3>{{ $instructor->name}}<a href="{{ route('instructors.edit',$instructor->id)}}" class="btn btn-default pull-right">editar</a></h3>
               <hr>
               <p>{!! $instructor->biography!!}</p>
            </div>
            <div class="col-md-3">
                @include('admin.instructors.fragment.aside')
                <a href="{{ route('home')}}" class="btn btn-info">Dashboard</a>
            </div>
        </div>
    </div>    
  </div>        
</div>



@endsection