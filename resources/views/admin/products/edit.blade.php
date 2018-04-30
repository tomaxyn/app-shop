@extends('layouts.app')

@section('title', 'Bienvenido a IZI LLC')

@section('body-class', 'product-page')

@section('content')
 
<div class="header header-filter" style="background-image: url('http://www.allabouthappylife.com/wallpapers/pink-plumeria/pink-plumeria-o-2800.jpg');"></div>   

<div class="main main-raised">
    <div class="container">
      
        <div class="section">
            <h2 class="title text-center">Editar producto Seleccionado</h2>
             @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)  
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
          @endif  
         <form method="post" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
            {{ csrf_field() }}

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Nombre del producto</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $product->name) }}" >
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Descripcion corta</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion', $product->description) }}">
                 </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Precio del producto</label>
                    <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price', $product->price) }}">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Existencia del producto</label>
                    <input type="number" step="1" class="form-control" name="existe" value="{{ old('existe', $product->existen) }}">
                </div>
            </div>

            <textarea class="form-control" placeholder="Descripcion extensa" rows="3" name="longdesc">{{ old('longdesc', $product->long_description)}}</textarea>
            <button class="btn btn-info">Registrar producto</button>
            <a href="{{ url('/admin/products')}}" class="btn btn-default">Cancelar</a>   
                        
         </form>
          
        </div>

    </div>

</div>


@endsection
