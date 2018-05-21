@extends('layouts.app1')

@section('title', 'Boletin informativo IZI LLC')

@section('body-class', 'fronts-page')

@section('content')

<div class="main main-raised">
 <div class="container">
    <div class="container">
            <img src="images/mainmiddle.jpg" class="headerimg1"/>
  <div class="row">
    <div class="col-md-11 col-md-offset-1">
    <h2 class="coorina">BOLETÍN INFORMATIVO</h2>
    @foreach($news as $new)
        <!-- <i class="fas fa-newspaper"></i>  -->        
        <img src="{{asset('images/1/Instructores/274310.png')}}">
        <button type="button" class="btn bi1 btn-link bi2" data-toggle="modal" data-target="#{{ $new->id}}">
  {{ $new->name}}
</button><br>
<div class="modal fade" id="{{ $new->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{ $new->name}}</h4>
      </div>     
      <div class="modal-body">
       {!!$new->content!!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>
    @endforeach
        </div>
      </div>  
      <hr>                                  
    </div>
 </div>
</div>
           
@endsection
