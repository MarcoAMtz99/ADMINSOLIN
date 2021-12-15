@extends('layouts.clientes.template')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4">{{ __('Historial') }}</div>
                            
                   <div class="card-body">
                          <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tipo de paquete</th>
                                        <th>Cp origen</th>
                                        <th>Cp destino</th>
                                        <th>peso</th>
                                        <th>ancho</th>
                                        <th>largo</th>
                                        <th>alto</th>
                                        <th>fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cotizaciones as $cotizacion)

                                    <tr>
                                        <td>{{$cotizacion->id}} </td>
                                        <td>{{$cotizacion->tipo_paquete ==0 ?'DOCUMENTO':'PAQUETE'}} </td>
                                        <td>{{$cotizacion->cp_origen}} </td>
                                        <td>{{$cotizacion->cp_destino}} </td>
                                        <td>{{$cotizacion->peso}} </td>
                                        <td>{{$cotizacion->ancho}} </td>
                                        <td>{{$cotizacion->largo}} </td>
                                        <td>{{$cotizacion->alto}} </td>
                                        <td>{{$cotizacion->created_at}} </td>
                                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                      </div>

                   </div>

                      
            </div>
        </div>
    </div>
</div>
@endsection