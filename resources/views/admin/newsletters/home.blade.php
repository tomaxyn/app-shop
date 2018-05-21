@extends('layouts.app')

@section('title', 'IZI LLC | Boletin')

@section('body-class', 'newsletter-page')

@section('content')

<div class="main main-raised">           
  <div class="section">
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header text center">Boletín Informativo</h2>
            </div>            
        </div>
        <div class="row">
            <div class="col-md-9">
               <h3>Listado de Boletines<a href="{{ route('newsletters.create')}}" class="btn btn-primary pull-right" rel="tooltip" title="Ver Afiliado">Nuevo</a></h3>
               @include('admin.newsletters.fragment.info')
               <table class="table table-hover table-striped">
                 <thead>
                    <tr>
                      <th width="20px">ID</th>
                      <th>Boletín informativo</th>
                      
                      <th class="pull-right">Operaciones</th>  
                    </tr>
                <tbody>
                    @foreach($newslets as $newx)
                    <tr>
                        <td>{{ $newx->id}}</td>
                        <td>{{ $newx->name}}</td>
                        <td class="pull-right">
                         <form action="{{ route('newsletters.destroy', $newx->id)}}" method="POST">
                        <a href="{{ route('newsletters.show',$newx->id)}}" type="button" rel="tooltip" title="Ver Boletín" class="btn btn-info btn-simple btn-xs"><i class="fa fa-info"></i></a>
                        <a href="{{ route('newsletters.edit',$newx->id)}}" type="button" rel="tooltip" title="Editar Boletín"class="btn btn-success btn-simple btn-xs"><i class="fa fa-edit"></i></a>                                            
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
               {!! $newslets->render()!!}
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