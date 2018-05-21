<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
Use App\Instructor;
use App\Afiliate;
use App\Newsletter;
use App\Event;
use App\Location;
use App\Coolaborator;
use App\Inforesource;
use App\Month;
use App\Country;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

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

    public function canreem()
    {
        return view('frontview.canreem');
    } 
     public function derres()
    {
        return view('frontview.derres');
    } 

     public function instructor()
    {                   
        $instructores = Instructor::all();
        return view('frontview.instruct')->with(compact('instructores'));
    }  

     public function afilia()
    {                   
        $afiliados = Afiliate::all();
        return view('frontview.afilia')->with(compact('afiliados'));
    }  

    public function news1()
    {                   
        $news = Newsletter::all();
        return view('frontview.boletin')->with(compact('news')); 
    }

     public function info1()
    {                   
        return view('frontview.infofees'); 
    }  

     public function comlist()
    {          
        $coolaborators = Coolaborator::all();
        $inforesources = Inforesource::all();
        $countrys = Country::all();
        $locations = Location::all();       
        $events = Event::all();
        $meses = Month::all();
        $cal = Newsletter::where('name', 'Calendario 2018')->get();
    return view('frontview.comlist')->with(compact('cal', 'events','locations','coolaborators','inforesources','meses', 'countrys')); 
    }  

     public function basicla()
    {                   
        return view('frontview.basic1area'); 
    }  
      public function videos()
    {                   
        return view('frontview.videos'); 
    }  
}
