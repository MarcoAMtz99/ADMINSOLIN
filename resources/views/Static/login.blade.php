@extends('layouts.static.template')

@section('content')


  <div class="section">
                           
                                                
            <div class="row">
              <div class="col s12 m6 center">
                <div class="card">
                  <div class="card-image ">
                   <img src="{{asset('img/logos/logo_completo.png')}}" class="center" >
                    <!-- <span class="card-title">Card Title</span> -->
                  </div>
                  <div class="card-content">
                        


                        <div class="row">
                              <form class="col s12 " method="POST" action="{{ route('login') }}">
                                  @csrf
                                  <div class="row">
                                  <div class="input-field col s12 ">
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="validate">
                                    <label for="email">Email</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="input-field col s12 ">
                                    <input id="password" type="password" name="password" class="validate">
                                    <label for="password">Password</label>
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="card-action">
                                      <a href="{{ route('password.request') }}" class="blue-text">¿olvidaste tu contraseña?</a>
                                      <!-- <a href="#"  class="blue-text">This is a link 2</a> -->
                                    </div>
                                </div>
                                <div class="row">
                                   <div class="input-field col s12 ">
                                   <button class="btn-large waves-effect waves-light blue " type="submit" onclick="M.toast({html: 'Bienvenido'})">Iniciar sesion
                                                <i class="material-icons right">send</i>
                                              </button>
                                        </div>
                                </div>
                              
                              </form>
                            </div>


                  </div>
                
                  <div class="card-action">
                    <a href="{{route('cliente.inicio')}} " class="blue-text">Regresar al inicio</a>
                    <!-- <a href="#"  class="blue-text">This is a link 2</a> -->
                  </div>
                  <div class="card-action">
                    <!-- <a href="#" class="blue-text">Regresar a la pagina anterior</a> -->
                    <p class="red-text">¿Eres nuevo?</p>
                    <a href="#"  class="blue-text">Registrate</a>
                  </div>
                  <!-- <div class="card-action col s12 m6">
                    
                  </div> -->
                </div>
              </div>
            </div>
                                            
      </div>
@endsection
