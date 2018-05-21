@extends('layouts.app1')

@section('title', 'Bienvenido a IZI LLC')

@section('body-class', 'fronts-page')

@section('content')

          

<div class="main main-raised">
  <div class="section text-center section-landing">  
    <div class="container">    
          <img src="images/main-image0259.jpg" class="headerimg1"/>
          <div class="row">
              <div class="col-md-4">                        
                            <a href="{{ url('/yosoyelyo')}}" class="btn btn-default btn-left">"YO" SOY EL "YO"</a>
                </div>
                <div class="col-md-4">
                      <a href="{{ url('/listacom')}}" class="btn btn-default btn-center">Encuentra una clase</a>
                </div>
                <div class="col-md-4">
                     <a href="{{ url('/lapazdelyo')}}" class="btn btn-default btn-right">La Paz del "YO"</a>
                </div>
                           
          </div>
                <div class="row">
                    <div class="col-md-4">
                            <h5 class="triumpo">IZI LLC patrocina Self I-Dentity a través de Ho'oponopono® (SITH®) es un proceso actualizado de resolución de problemas en Hawai para liberar recuerdos que se experimentan como problemas. SITH® fue desarrollado por Morrnah Nalamaku Simeona, una hawaiana Kahuna Lapa'au. Ella fue reconocida en Hawaii como un Tesoro viviente de Hawaii en 1983.</h5>
                        
                    </div>
                    <div class="col-md-4">                                         
                            <H5 class="triumpo">Cuando estamos dispuestos a asumir el 100% de responsabilidad y dejar ir, lo que es correcto y perfecto se desenvuelve.</H5>  <h5 class="triumpo">La actualización de los patrocinadores de IZI LLC Self I-Dentity a través del proceso de Ho'oponopono® proporciona "un enfoque paso a paso para lograr la paz, el equilibrio y un nuevo significado de la vida a través de la comprensión de la propia identidad de uno mismo".</h5>
                        
                    </div>
                    <div class="col-md-4">                       
                            <h5 class="triumpo">TENGA EN CUENTA: Solo IZI LLC está autorizada a coordinar, enseñar y utilizar Self-I-Dentity a través de materiales con derechos de autor de Ho'oponopono®. Nadie más está autorizado para enseñar este exclusivo sistema de auto-identición a través de Ho'oponopono®.</h5> <h5 class="triumpo">Gracias por visitar nuestro sitio Web.</h5> <h5 class="triumpo">Le deseamos PAZ más allá de todo entendimiento.</h5>
                        </div>
                    </div>
                        
        </div>
       
    </div>

</div>


@endsection

