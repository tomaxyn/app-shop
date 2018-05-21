@extends('layouts.app')

@section('title', 'Bienvenido a IZI LLC')

@section('body-class', 'product-page')

@section('content')
 
<div class="main main-raised">
     <div class="container" style="width: 100%;">
            <img src="{{ url('images/mainmiddle.jpg')}}" class="headerimg1"/>   
      
        <div class="section">
            <h2 class="title text-center">Registrar producto nuevo</h2>

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)  
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
          @endif  
         <form method="post" action="{{ url('/admin/products') }}">
            {{ csrf_field() }}

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Nombre del producto</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre')}}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Descripcion corta</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion')}}">
                 </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Precio del producto</label>
                    <input type="number" step="0.01" class="form-control" name="price"  value="{{ old('price')}}">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Existencia del producto</label>
                    <input type="number" step="1" class="form-control" name="existe" value="{{ old('existe')}}">
                </div>
            </div>

            <textarea class="form-control" placeholder="Descripcion extensa" rows="3" name="longdesc">{{ old('longdesc')}}</textarea>
            <button class="btn btn-info">Registrar producto</button>
            <a href="{{ url('/admin/products')}}" class="btn btn-default">Cancelar</a>           
         </form>
          
        </div>

    </div>

</div>


@endsection

