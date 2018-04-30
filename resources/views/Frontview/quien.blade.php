@extends('layouts.app1')

@section('title', '¿Quien esta a cargo? IZI LLC')

@section('body-class', 'fronts-page')

@section('content')
 
<div class="header" style="background-image: url('http://www.allabouthappylife.com/wallpapers/pink-plumeria/pink-plumeria-o-2800.jpg');">
</div>
<div class="main main-raised">
 <div class="container">
  <div class="row">    
    <h2 class="coorina" style="text-align: center">¿Quien esta a cargo?</h2>
        <div class="col-md-3 col-md-offset-2">
            <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-bulgarian.pdf')}}" target="_blank"> Bulgaro</a></p>
             <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-sim-chinese.pdf')}}" target="_blank"> Chino Simplificado</a></p>
              <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-traditional-chinese.pdf')}}" target="_blank"> Chino tradicional</a></p>
               <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/whos-croatian-abridged.pdf')}}" target="_blank"> Croata (abreviado)</a></p>
                <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-czech.pdf')}}" target="_blank"> Checo</a></p>
                <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-nederlands.pdf')}}" target="_blank"> Holandes</a></p>
                <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-english-abridged.pdf')}}" target="_blank"> Ingles (abreviado)</a></p>

        </div>
        <div class="col-md-3">
             <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-french.pdf')}}" target="_blank"> Frances</a></p>
              <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-german.pdf')}}" target="_blank"> Aleman</a></p>
               <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-hebrew.pdf')}}" target="_blank"> Hebreo</a></p>
                <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-hungarian-abridged.pdf')}}" target="_blank"> Hungaro (abreviado)</a></p>
                 <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-italian-abridged.pdf')}}" target="_blank"> Italiano (abreviado)</a></p>
                 <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-japanese.pdf')}}" target="_blank"> Japones</a></p>
                  <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-korean.pdf')}}" target="_blank"> Coreano</a></p>
        </div>
        <div class="col-md-3">
                 <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-polish.pdf')}}" target="_blank"> Polaco</a></p>
                  <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-portuguese.pdf')}}" target="_blank"> Portugues</a></p>
                   <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-romania.pdf')}}" target="_blank"> Rumano</a></p>
                    <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-russian-abridged.pdf')}}" target="_blank"> Ruso (abreviado)</a></p>
                     <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-spanish.pdf')}}" target="_blank"> Español</a></p>
                      <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-swedish.pdf')}}" target="_blank"> Sueco</a></p>
                       <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-turkish.pdf')}}" target="_blank"> Turco</a></p>
                        <p class="qiicha"><i class="fal fa-file-pdf"></i><a href="{{ asset('docs/who-ukrainian.pdf')}}" target="_blank"> Ucraniano</a></p>
          </div>
      </div>                                    
    </div>
 </div>
           


@endsection

