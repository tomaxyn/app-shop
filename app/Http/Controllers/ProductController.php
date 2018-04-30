<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	//$products = Product::all();
    	$products = Product::paginate(10);
    	return view('admin.products.index')->with(compact('products'));  // listado
    }

    public function create()
    {
    	return view('admin.products.create');  // formulario de registro del producto
    }

    public function store(Request $request)
    {
    	//registrar el nuevo producto en la BD.
    	//dd($request->all()); permite a la vista desplegar valores desde el controllador
        $messages = [
            'nombre.required' => 'Es necesario ingresar un nombre para el producto',
            'nombre.min' => 'El nombre del producto debe tener almenos 5 caracteres',
            'descripcion.required' => 'Es necesario ingresar la descripcion corta del producto',
            'descripcion.max' => 'La descripcion corta no debe exceder los 600 caracteres',
            'price.required' => 'Es necesario ingresar el precio del producto',
            'price.numeric' => 'El precio debe ser numerico, nada de letras u otros',
            'price.min' => 'el precio debe ser una cantidad mayor a 0'
        ];

        $rules = [
            'nombre' => 'required|min:5',
            'descripcion' => 'required|max:600',
            'price' => 'required|numeric|min:0',
        ];

        $this->validate($request, $rules, $messages);

    	$product = new Product();
    	$product->name = $request->input('nombre');
    	$product->description = $request->input('descripcion');
    	$product->long_description = $request->input('longdesc');
    	$product->price = $request->input('price');
    	$product->existen = $request->input('existe');
    	$product->save(); //insert

    	return redirect('/admin/products');
    }

     public function edit($id)
    {
    	//return "Se muestra aqui el formulario de edicion para el producto con id: $id";
    	$product = Product::find($id);
    	return view('admin.products.edit')->with(compact('product'));  // formulario de actualizacion de datos del producto
    }

    public function update(Request $request, $id)
    {
    	//registrar el nuevo producto en la BD.
    	//dd($request->all()); permite a la vista desplegar valores desde el controllador
         $messages = [
            'nombre.required' => 'Es necesario ingresar un nombre para el producto',
            'nombre.min' => 'El nombre del producto debe tener almenos 5 caracteres',
            'descripcion.required' => 'Es necesario ingresar la descripcion corta del producto',
            'descripcion.max' => 'La descripcion corta no debe exceder los 600 caracteres',
            'price.required' => 'Es necesario ingresar el precio del producto',
            'price.numeric' => 'El precio debe ser numerico, nada de letras u otros',
            'price.min' => 'el precio debe ser una cantidad mayor a 0'
        ];

        $rules = [
            'nombre' => 'required|min:5',
            'descripcion' => 'required|max:600',
            'price' => 'required|numeric|min:0',
        ];

        $this->validate($request, $rules, $messages);
        
    	$product = Product::find($id);
    	$product->name = $request->input('nombre');
    	$product->description = $request->input('descripcion');
    	$product->long_description = $request->input('longdesc');
    	$product->price = $request->input('price');
    	$product->existen = $request->input('existe');
    	$product->save(); //update

    	return redirect('/admin/products');
    }

     public function del($id)
    {
        
        $product = Product::find($id);
        $product->delete(); //Borra el registro correspondiente al id del producto

        return back();//ya nos encontrabamos en la direccion, por lo que no se tiene que redirigir
    }


}
