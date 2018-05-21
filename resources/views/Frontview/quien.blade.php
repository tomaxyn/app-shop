@extends('layouts.app1')

@section('title', '¿Quien esta a cargo? IZI LLC')

@section('body-class', 'fronts-page')

@section('content')

<div class="main main-raised">
 <div class="container">
            <img src="images/mainmiddle.jpg" class="headerimg1"/>
  <div class="row">    
    <h2 class="coorina" style="text-align: center">¿QUIEN ESTA A CARGO?</h2>
    <hr>
        <div class="col-md-3 col-md-offset-1">
         
           <p class="qiicha"><a href="{{ asset('docs/who-bulgarian.pdf')}}" target="_blank"> <img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Bulgaro</a></p>
             <p class="qiicha"><a href="{{ asset('docs/who-sim-chinese.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Chino Simplificado</a></p>
              <p class="qiicha"><a href="{{ asset('docs/who-traditional-chinese.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Chino tradicional</a></p>
               <p class="qiicha"><a href="{{ asset('docs/whos-croatian-abridged.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Croata (abreviado)</a></p>
                <p class="qiicha"></i><a href="{{ asset('docs/who-czech.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Checo</a></p>
                <p class="qiicha"><a href="{{ asset('docs/who-nederlands.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Holandes</a></p>
                <p class="qiicha"><a href="{{ asset('docs/who-english-abridged.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Ingles (abreviado)</a></p>

        </div>
        <div class="col-md-3 col-md-offset-1">
             <p class="qiicha"><a href="{{ asset('docs/who-french.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Frances</a></p>
              <p class="qiicha"><a href="{{ asset('docs/who-german.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Aleman</a></p>
               <p class="qiicha"><a href="{{ asset('docs/who-hebrew.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Hebreo</a></p>
                <p class="qiicha"><a href="{{ asset('docs/who-hungarian-abridged.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Hungaro (abreviado)</a></p>
                 <p class="qiicha"><a href="{{ asset('docs/who-italian-abridged.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Italiano (abreviado)</a></p>
                 <p class="qiicha"><a href="{{ asset('docs/who-japanese.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Japones</a></p>
                  <p class="qiicha"><a href="{{ asset('docs/who-korean.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Coreano</a></p>
        </div>
        <div class="col-md-3 col-md-offset-1">
                 <p class="qiicha"><a href="{{ asset('docs/who-polish.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Polaco</a></p>
                  <p class="qiicha"><a href="{{ asset('docs/who-portuguese.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Portugues</a></p>
                   <p class="qiicha"><a href="{{ asset('docs/who-romania.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Rumano</a></p>
                    <p class="qiicha"><a href="{{ asset('docs/who-russian-abridged.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Ruso (abreviado)</a></p>
                     <p class="qiicha"><a href="{{ asset('docs/who-spanish.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Español</a></p>
                      <p class="qiicha"><a href="{{ asset('docs/who-swedish.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Sueco</a></p>
                       <p class="qiicha"><a href="{{ asset('docs/who-turkish.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Turco</a></p>
                        <p class="qiicha"><a href="{{ asset('docs/who-ukrainian.pdf')}}" target="_blank"><img src="{{asset('images/1/Instructores/adobe-reader69e8.png')}}"> Ucraniano</a></p>
          </div>
      </div>                                    
    </div>
 </div>
           


@endsection

