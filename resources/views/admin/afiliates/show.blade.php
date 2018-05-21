@extends('layouts.app')

@section('title', 'IZI LLC | Afiliados')

@section('body-class', 'afiliate-page')

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
               <h3>{{ $afiliate->name}}<a href="{{ route('afiliates.edit',$afiliate->id)}}" class="btn btn-default pull-right">editar</a></h3>
               <hr>
               <p>{!! $afiliate->biography!!}</p>
            </div>
            <div class="col-md-3">
                @include('admin.afiliates.fragment.aside')
                <a href="{{ route('home')}}" class="btn btn-info">Dashboard</a>
            </div>
        </div>
    </div>    
  </div>        
</div>



@endsection