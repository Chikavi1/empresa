  @extends('layouts.app')
<script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
    $('.parallax').parallax();
  });
      
    </script>

  @section('content')
  <div class="parallax-container">
      <div class="parallax"><img src="https://support.apple.com/content/dam/edam/applecare/images/en_US/homepage/hero-banner-homepage.image.large_2x.jpg" width="100"></div>
        <strong>
            
        <h4 class="valign-wrapper" style="margin-top:5em;margin-left: 7em;font-style: bold;">Te damos la bienvenida al Soporte técnico de Chikavi's</h4>
        </strong>
    </div>
    <div class="section white">
      <div class="row container">
        <p class="grey-text text-darken-3 lighten-3 fontx10">Porque mantener a nuestros Clientes satisfechos es lo Más importante para nosotros, te brindamos una pagina de soporte y asistencia técnica, la cual estará en funcionamiento las 24 hrs del día durante todo el año</p>
        <p class="fontx10">La presente Plataforma donde podrás comunicarnos sobre tus incidentes u posibles problemas  surgidos con el paso del tiempo o requerimiento de Soporte Técnico.
Trabajamos para resolver cualquier duda tuya durante las 24 hrs del dia los 365 días del año
Agradecemos tu valiosa cooperación para la mejora de nuestro producto
Soporte Técnico CHIKAVI´S es un espacio en donde ¡estamos para ayudarte !</p>
        <a href="{{ route('reporte')}}" class="btn btn-block color-cut">Iniciar reporte</a>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="https://i.pinimg.com/originals/34/c4/f0/34c4f083ad420ac446f4f90448d8856c.jpg"></div>
    </div>
    @endsection