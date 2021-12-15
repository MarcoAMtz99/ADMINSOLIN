@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4">{{ __('Historial de Cotizaciones') }}</div>
                   
                       
                <div class="card-body">
                     <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                         <th>Cliente</th>
                                        <th>Tipo de paquete</th>
                                        <th>Cp origen</th>
                                        <th>Cp destino</th>
                                        <th>N° de Guia</th>
                                        <th>Costo</th>
                                        <th>Empresa</th>
                                        <th>fecha</th>
                                        <th colspan="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cotizaciones as $key=>$cotizacion)

                                    <tr>
                                        <td>{{$key+1}} </td>
                                         <th>{{$cotizacion->cliente_id}}</th>
                                        <td>{{$cotizacion->tipo_paquete ==0 ?'DOCUMENTO':'PAQUETE'}} </td>
                                        <td>{{$cotizacion->cp_origen}} </td>
                                        <td>{{$cotizacion->cp_destino}} </td>
                                            <td>SO {{rand(1,99999)}} </td>
                                        <td>$9999 </td>
                                        <td>Delivery_Method </td>
                                        <td>{{$cotizacion->created_at}} </td>
                                            <td> 
                                            

                                            </td>   
                                            <td><button class="btn btn-info">  <i class="bi bi-search"></i></button></td>
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
