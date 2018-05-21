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
               <h3>Listado de Instructores<a href="{{ route('instructors.create')}}" class="btn btn-primary pull-right">Nuevo</a></h3>
               @include('admin.instructors.fragment.info')
               <table class="table table-hover table-striped">
                 <thead>
                    <tr>
                      <th width="20px">ID</th>
                      <th>Nombre del Instructor</th>
                      <th colspan="3" class="pull-right">Operaciones</th>  
                    </tr>
                <tbody>
                    @foreach($instructors as $instruc)
                    <tr>
                        <td>{{ $instruc->id}}</td>
                        <td>{{ $instruc->name}}</td>
                        <td class="pull-right">
                         <form action="{{ route('instructors.destroy', $instruc->id)}}" method="POST">
                        <a href="{{ route('instructors.show',$instruc->id)}}" type="button" rel="tooltip" title="Ver Instructor" class="btn btn-info btn-simple btn-xs"><i class="fa fa-info"></i></a>
                        <a href="{{ route('instructors.edit',$instruc->id)}}" type="button" rel="tooltip" title="Editar Instructor"class="btn btn-success btn-simple btn-xs"><i class="fa fa-edit"></i></a>                                            
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}
                            <!--<input type="hidden" name="_method" value="DELETE"> -->
                            <button type="submit" rel="tooltip" title="Borrar" class="btn btn-danger btn-simple btn-xs"><i class="fa fa-times"></i></button>                
                          </form>
                        </td>
                     </tr>
                    @endforeach   
                </tbody>
               </table>
               {!! $instructors->render()!!}
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