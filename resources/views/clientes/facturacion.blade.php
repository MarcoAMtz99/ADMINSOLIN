@extends('layouts.clientes.template')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4">{{ __('Datos Fiscales') }}</div>
                               @foreach ($errors->all() as $error)
                                  <li> <strong>{{ $error}}</strong></li>

                                    @endforeach
                  <div class="card-body">
                      <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>calle</th>
                                        <th>Cp</th>
                                        <th>Ciudad</th>
                                        <th>Colonia</th>
                                        <th>Correo</th>
                                        <th>Razon social</th>
                                        <th>Rfc</th>
                                        <!-- <th colspan="2">Acciones</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                  @if(isset($datosfiscales))

                                  @foreach($datosfiscales as $key => $dato )
                                   <tr>
                                      <td>{{$key+1}} </td>
                                      <td>{{$dato->calle}}</td>
                                      <td>{{$dato->cp}}</td>
                                      <td>{{$dato->ciudad}}</td>
                                      <td>{{$dato->colonia}}</td>
                                      <td>{{$dato->correo}}</td>
                                      <td>{{$dato->razon_social}}</td>
                                      <td>{{$dato->rfc}}</td>       
                                   </tr>
                                  @endforeach
                                  
                                  
                                   @endif
                                </tbody>
                            </table>
                      </div>
                  </div>
                   <div class="card-body">
                       <form action="{{ route('datosfiscales.store') }}" method="POST">
                         @csrf
                         <div class="row">
                                   <div class="form-group ">
                                 <input type="hidden"  class="form-control" name="cliente_id" value="{{Auth::user()->cliente->user_id}}">
                               </div>
                               <div class="form-group col-md-4">
                                 <input type="text" placeholder="calle" class="form-control" name="calle">
                               </div>
                                <div class="form-group col-md-4">
                                 <input type="number" placeholder=" num° ext" class="form-control" name=" num_ext">
                               </div>
                               <div class="form-group col-md-4">
                                 <input type="number" placeholder="num° int" class="form-control" name="num_int">
                               </div>
                         </div>
                        <div class="row">
                                      <div class="form-group col-md-4">
                                     <input type="text" placeholder="colonia" class="form-control" name="colonia">
                                       </div>
                                        <div class="form-group col-md-4">
                                         <input type="number" placeholder="cp" class="form-control" name="cp">
                                       </div>
                                        <div class="form-group col-md-4">
                                         <input type="text" placeholder="ciudad" class="form-control" name="ciudad">
                                       </div>
                                      </div>
                          <div class="row">
                                      <div class="form-group col-md-4 ">
                                     <input type="text" placeholder="pais" class="form-control" name="pais">
                                     </div>
                                      <div class="form-group col-md-4">
                                       <input type="text" placeholder="alcaldia o municipio" class="form-control" name="alc_mun">
                                     </div>
                                      <div class="form-group col-md-4">
                                       <input type="text" placeholder="rfc" class="form-control" name="rfc">
                                     </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-md-4">
                                 <input type="email" placeholder="correo" class="form-control" name="correo">
                                     </div>
                                      <div class="form-group col-md-4">
                                       <input type="text" placeholder="razon social" class="form-control" name="razon_social">
                                     </div>
                          </div>
                          
                       <!--    <div class="form-group">
                        
                            <select class="custom-select" id="inputGroupSelect01" name="tipo_paquete">
                                            <option selected>Tipo de paquete</option>
                                                <option value="0">Documento </option>
                                                <option value="1">Paquete </option>
                                              </select>
                         </div> -->
                          <div class="form-group">
                                 <button  class="btn btn-primary">guardar</button>
                            </div>
                       </form>
                   </div>

                      
            </div>
        </div>
    </div>
</div>
@endsection
