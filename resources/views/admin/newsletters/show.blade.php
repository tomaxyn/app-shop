@extends('layouts.app')

@section('title', 'IZI LLC | Boletin')

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
               <h3>{{ $newsle->name}}<a href="{{ route('newsletters.edit',$newsle->id)}}" class="btn btn-default pull-right">editar</a></h3>
               <hr>
               <p>{!! $newsle->content!!}</p>
            </div>
            <div class="col-md-3">
                @include('admin.newsletters.fragment.aside')
                <a href="{{ route('home')}}" class="btn btn-info">Dashboard</a>
            </div>
        </div>
    </div>    
  </div>        
</div>



@endsection