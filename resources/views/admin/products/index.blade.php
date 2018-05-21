@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('body-class', 'product-page')

@section('content')
 
<div class="main main-raised">
    <div class="container">
           <!--  <img src="{{ url('images/mainmiddle.jpg')}}" class="headerimg1"/>        -->
        <div class="section text-center">
            <h2 class="title">Listado de Productos</h2>
           <div class="team">
            <a href="{{ url('/admin/products/create')}}" class="btn btn-info btn-just-icon" title="Añadir producto" rel="tooltip">Nuevo proucto</a>                
<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="col-md-2 text-center">Nombre</th>           
            <th class="text-right">Tipo</th>
            <th class="text-right">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td class="text-center">{{ $product->id}}</td>
            <td>{{ $product->name}}</td>           
            <td class="text-right">{{ $product->category_name}}</td>
            <td class="td-actions text-right">
                                
                <form method="post" action="{{ url('/admin/products/'.$product->id)}}">
                    {{ csrf_field()}}
                    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> Se sustituye por la linea de arriba-->
                    {{ method_field('DELETE')}}
                    <!-- <input type="hidden" name="_method" value="DELETE"> Se sustituye or la linea de arriba-->
                    <a href="#" type="button" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-info"></i></a>
                <a href="{{ url('/admin/products/'.$product->id.'/edit')}}" type="button" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i></a>
                    <a href="{{ url('/admin/products/'.$product->id.'/images')}}" type="button" rel="tooltip" title="Imagenes del Producto" class="btn btn- btn-warning btn-xs"><i class="fa fa-image"></i></a>
                    <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs"><i class="fa fa-times"></i></button>                    
                    </form>                                           
                </td>
             @endforeach   
         </tr>
        </tbody>    
    </table>
    {{ $products->links() }}
            </div>
        
        </div>
    </div>
</div>
    


@endsection

