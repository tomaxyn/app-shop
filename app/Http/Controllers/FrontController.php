<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function welcome()
    {            
    	//$products = Product::all();
        //return view('welcome')->with(compact('products')); 
        return view('welcome');
    }

    public function yosoy()
    {            
    	//$products = Product::all();
        return view('frontview.yosoyelyo'); 
    }

     public function pazsoy()
    {            
    	//$products = Product::all();
        return view('frontview.lapazdelyo'); 
    }
    
     public function acerca()
    {            
        //$products = Product::all();
        return view('frontview.acercade'); 
    }

     public function cooreinstr()
    {            
       
        return view('frontview.cooreinstr'); 
    }
    
     public function disclaim()
    {                   
        return view('frontview.disclaim'); 
    }

    public function quien()
    {                   
        return view('frontview.quien'); 
    }  

}
