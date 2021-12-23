<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
  <title>Solin</title>
</head>
                          @if(request()->routeIs('cliente.login') == 1)
                            <body style="background-image: url('{{ asset('img/FONDO.jpg')}}');  background-size: auto;">
                             
                           </div>
                           @else
                           <body>
                           @endif
<!-- NAVBAR -->
              <nav  {{request()->routeIs('cliente.login') == 1 ? 'hidden': ''}}>
                <div class="nav-wrapper blue lighten-4 " > 
                  <a href="#!" class="brand-logo"><img src="{{ asset('img/logos/logo_completo.png') }}" id="logo-container" alt=""  style="width:80px; margin-left:30px;">
                  </a>
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">view_week</i></a>
                  <ul class="right hide-on-med-and-down">
                    
                        <li><a href="{{route('cliente.contacto')}}"class="black-text text-darken-5">CONTACTO</a></li>
                         <li><a href="{{route('cliente.login')}}"class="black-text text-darken-5">COTIZA</a></li>
                        <li><a href="{{route('cliente.nosotros')}}"class="black-text text-darken-2">NOSOTROS</a></li>
                        <li><a href="{{route('cliente.rastrear')}}"class="black-text text-darken-2">RASTREAR</a></li>
                        <li><a href="{{route('cliente.faqs')}}"class="black-text text-darken-2">FAQS</a></li>
                        <li><a href="{{route('cliente.inicio')}}"class="black-text text-darken-2">INICIO</a></li>
                        <li><a href="{{route('cliente.login')}}" class="black-text text-darken-5">INICIAR SESION</a></li>
                  </ul>
                </div>
              </nav>

              <ul class="sidenav blue" id="mobile-demo">
                       <li><a href=" {{route('cliente.login')}}" class="black-text text-darken-2">INICIAR SESION</a></li>
                        <li><a href="{{route('cliente.login')}}"class="black-text text-darken-2">COTIZA</a></li>
                        <li><a href="{{route('cliente.rastrear')}}"class="black-text text-darken-2">RASTREAR</a></li>
                        <li><a href="{{route('cliente.contacto')}}"class="black-text text-darken-2">CONTACTO</a></li> 
                        <li><a href="{{route('cliente.nosotros')}}"class="black-text text-darken-2">NOSOTROS</a></li>
                        <li><a href="{{route('cliente.faqs')}}"class="black-text text-darken-2">FAQS</a></li>
                        <li><a href="{{route('cliente.inicio')}}"class="black-text text-darken-2">INICIO</a></li>
              </ul>
<!-- PARTE DEL CONTENEDOR EN DONDE IRA EL CONTENDIO A MOSTRAR -->

            <div class="container">

              <!-- AQUI SE INCRUSTA EL CONTENIDO -->
              
                            @yield('content')
                        
                          
                            
                            <br><br>

            </div>
<!-- FOOTER -->
  <footer class="page-footer red"  {{request()->routeIs('cliente.login') == 1 ? 'hidden': ''}}>
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">SOLIN</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#!">Byw-si</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="{{ asset('js/materialize.js') }}"></script>
   <script src="{{ asset('js/init.js') }}"></script>

  <script>
    
  // document.addEventListener('DOMContentLoaded', function() {
  //   var elems = document.querySelectorAll('.sidenav');
  //   console.log('elems:',elems);
  //   var instances = M.Sidenav.init(elems,options);
  // });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.carousel').carousel();
     $('.parallax').parallax();
     $('select').formSelect();
     $('.tap-target').tapTarget();
  });
  </script>
  </body>
</html>
