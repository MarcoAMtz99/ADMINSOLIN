@extends('layouts.static.template')

@section('content')

<style>
        .navigator{
            background: #000000;
            color: #ffffff;
            text-align: center;
            padding-top: 9rem;
            height: 20rem;
        }
    </style>
  <div class="section">
                            <div class="row">
                                <div class="col s12 m12">
                                     <br><br>
                                        <h1 class="header center blue-text">RASTREO</h1>
                                        <div class="row center">
                                        
                                         <div class="input-field col s12">
                                              <select id="icon_prefix2" >
                                                <option value="" disabled selected>Elige la empresa</option>
                                                <option value="1">Empresa 1</option>
                                                <option value="2">Empresa 2</option>
                                                <option value="3">Empresa 3</option>
                                              </select>
                                              <label for="icon_prefix3">Empresas de envio</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <form class="col s12">
                                              <div class="row">
                                                <div class="input-field col s6">
                                                  <i class="material-icons prefix">dialpad</i>
                                                  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                                  <label for="icon_prefix2">Numero de guia</label>
                                                </div>
                                                <div class="input-field col s6">
                                                   <a class="btn-floating pulse red btn-large" onclick="$('.tap-target').tapTarget('open')"><i class="material-icons">local_shipping</i></a>
                                                   <!-- LOADER PARA CUANDO ENVIEMOS EL NUMERO DE GUIA -->
                                                 <!--     <div class="preloader-wrapper small active">
                                                    <div class="spinner-layer spinner-blue-only">
                                                    <div class="circle-clipper left">
                                                    <div class="circle"></div>
                                                     </div><div class="gap-patch">
                                                    <div class="circle"></div>
                                                    </div><div class="circle-clipper right">
                                                    <div class="circle"></div>
                                                  </div>
                                                </div>
                                                 </div> -->
                                                </div>
                                              </div>

                                            </form>

                                          </div>

                                          <div class="row">
                                             <div class="navigator">
                                                        <div>
                                                            No se encuentra el producto
                                                        </div>
                                                    </div>
                                             

                                
                                          </div>
                                          <div class="fixed-action-btn direction-top active">
                                               <!-- Element Showed -->
                                            <a id="menu" class="waves-effect waves-light btn btn-floating" ><i class="material-icons">menu</i></a>

                                            <!-- Tap Target Structure -->
                                            <div class="tap-target" data-target="menu">
                                              <div class="tap-target-content">
                                                <h5>Estamos procesando tu numero de guia..</h5>
                                                <p>Gracias :)</p>
                                              </div>
                                            </div>
                                          </div>
                                        <div class="row right">
                                          <h3 class="header  black-text right-align">¿Que esperas?</h3>
                                          <span class="right-align">
                                          	<a href="{{route('cliente.registro')}}" id="download-button" class="btn-large waves-effect waves-light red">Registrate</a>
                                          </span>
                                        </div>
                                        <br><br>
                                </div>
                            </div>
                            
    </div>
@endsection
