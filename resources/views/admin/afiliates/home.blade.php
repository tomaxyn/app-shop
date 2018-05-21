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
               <h3>Listado de Afiliados<a href="{{ route('afiliates.create')}}" class="btn btn-primary pull-right" rel="tooltip" title="Ver Afiliado">Nuevo</a></h3>
               @include('admin.afiliates.fragment.info')
               <table class="table table-hover table-striped">
                 <thead>
                    <tr>
                      <th width="20px">ID</th>
                      <th>Nombre del Afiliado</th>
                      <th colspan="3" class="pull-right">Operaciones</th>  
                    </tr>
                <tbody>
                    @foreach($afiliates as $afilia)
                    <tr>
                        <td>{{ $afilia->id}}</td>
                        <td>{{ $afilia->name}}</td>
                        <td class="pull-right">
                         <form action="{{ route('afiliates.destroy', $afilia->id)}}" method="POST">
                        <a href="{{ route('afiliates.show',$afilia->id)}}" type="button" rel="tooltip" title="Ver Afiliado" class="btn btn-info btn-simple btn-xs"><i class="fa fa-info"></i></a>
                        <a href="{{ route('afiliates.edit',$afilia->id)}}" type="button" rel="tooltip" title="Editar Afiliado"class="btn btn-success btn-simple btn-xs"><i class="fa fa-edit"></i></a>                                            
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