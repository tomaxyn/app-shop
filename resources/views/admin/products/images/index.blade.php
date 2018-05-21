@extends('layouts.app')

@section('title', 'Imagenes de Productos')

@section('body-class', 'images-page')

@section('content')
 
<div class="main main-raised">
   <div class="container" style="width: 100%;">
            <img src="{{ url('images/mainmiddle.jpg')}}" class="headerimg1"/>   
        <div class="section text-center">
            <h2 class="title">Imagenes del Producto {{ $product->id}} {{$product->name }}</h2>
             <div class="panel panel-default">
				<div class="panel-body">
		            <form method="post" action="" enctype="multipart/form-data">
		            	{{ csrf_field() }}
		            		<input type="file" name="photo" required>
		            		<button type="submit" class="btn btn-primary btn-just-icon" title="" rel="tooltip">Subir nueva imagen</button> 
		            		<a href="{{ url('/admin/products')}}" class="btn btn-default btn-just-icon" title="Añadir producto" rel="tooltip">Volver al listado de productos</a>     
		            </form>
		    	</div>           
            	</div>
            	<hr>
	           <div class="row"> 
	            @foreach($images as $image)
		            <div class="col-md-4">
		            <div class="panel panel-default">
					  <div class="panel-body">

					    <img src="{{ $image->url}}" width="200">
					    
					    <form method="post" action="" >
					    	{{ csrf_field() }}
					    	{{ method_field('DELETE')}}
					    	<input type="hidden" name="image_id" value="{{ $image->id}}">
					    	<button type="submit" class="btn btn-danger btn-round">Eliminar</button>	
					    </form>
					    

					  </div>
					</div>
					</div>
					@endforeach
				</div>
	        </div>
    </div>

</div>

@endsection

