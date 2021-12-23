@extends('layouts.static.template')

@section('content')


  <div class="section">
                            <div class="row">
                                <div class="col s12 m12">
                                     <br><br>
                                        <h1 class="header center blue-text">ENVIA A LA
                                                MEJOR TARIFA</h1>
                                        <div class="row center">
                                          <h5 class="header col s12 light">COTIZA PRECIOS, TIEMPOS DE ENTREGA Y PREGUNTA POR
                                          NUESTROS DESCUENTOS</h5>
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
