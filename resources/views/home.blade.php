@extends('layouts.app')

@section('title', 'IZI LLC | Dashboard')

@section('body-class', 'dashboard-page')

@section('content')
 
<div class="main main-raised">
    <div class="container">
            <img src="images/mainmiddle.jpg" class="headerimg1"/>      
             @if (strcmp(Auth()->user()->roll->name, "Administrador") == 0)
        <div class="section">
            <h2 class="title text-center"><i class="fa fa-rocket"></i> Dashboard</h2>

            <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Bienvenido(a) <span class="usern">{{ Auth::user()->name}}</span> al panel de administracion de IZI LLC web page</h3>
                </div>
          <div class="row">
              <div class="col-md-3">
                  <div class="panel">
                      <i class="fa fa-list-alt icon-home"></i>
                      <a href="{{ route('instructors.index')}}" class="btn btn-success btn-block btn-home-admin">Instructores</a>
                  </div>
              </div>
               <div class="col-md-3">
                  <div class="panel">
                      <i class="fa fa-list-alt icon-home"></i>
                      <a href="{{ route('afiliates.index')}}" class="btn btn-success btn-block btn-home-admin">Afiliados</a>
                  </div>
              </div>
               <div class="col-md-3">
                  <div class="panel">
                      <i class="fa fa-list-alt icon-home"></i>
                      <a href="{{ route('newsletters.index')}}" class="btn btn-success btn-block btn-home-admin">Boletines</a>
                  </div>
              </div>
               <div class="col-md-3">
                  <div class="panel">
                      <i class="fa fa-list-alt icon-home"></i>
                      <a href="{{ route('instructors.index')}}" class="btn btn-success btn-block btn-home-admin">Instructores</a>
                  </div>
              </div>
          </div>
        </div>
          @endif
    </div>

</div>

