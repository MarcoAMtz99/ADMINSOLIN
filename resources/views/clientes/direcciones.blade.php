@extends('layouts.clientes.template')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4">{{ __('Direcciones') }}</div>
                           <a href="{{route('direccion.create')}} " class="btn btn-danger {{count($direcciones)>=5 ? 'disabled':''}} ">AGREGAR</a> 
                   <div class="card-body">
                          <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                      
                                        <th>calle</th>
                                        <th>num ext</th>
                                        <th>num int</th>
                                        <th>colonia</th>
                                        <th>cp</th>
                                        <th>ciudad</th>
                                        <th>pais</th> 
                                        <th>alc_mun</th>
                                        <th>destinatario</th>
                                        <th>telefono</th> 
                                        <th></th> 
                                   </tr>
                                </thead>
                                <tbody>
                                   @foreach($direcciones as $key => $direccion)
                                   <tr>
                                   
                                    <td>{{$key+1}} </td>
                                   
                                    <td>{{$direccion->calle}} </td>
                                    <td>{{$direccion->num_ext}} </td>
                                    <td>{{$direccion->num_int}} </td>
                                    <td>{{$direccion->colonia}} </td>
                                    <td>{{$direccion->cp}} </td>
                                    <td>{{$direccion->ciudad}} </td>
                                    <td>{{$direccion->pais}} </td>
                                    <td>{{$direccion->alc_mun}} </td>
                                    <td>{{$direccion->destinatario}} </td>
                                    <td>{{$direccion->telefono}} </td>
                                    <td></td> 
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