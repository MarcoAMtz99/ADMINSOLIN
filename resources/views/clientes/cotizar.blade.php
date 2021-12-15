@extends('layouts.clientes.template')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4">{{ __('Cotizar') }}</div>
                               @foreach ($errors->all() as $error)
                                  <li> <strong>{{ $error}}</strong></li>

                                    @endforeach
                   <div class="card-body">
                       <form action="{{ route('cotizacion.store') }}" method="POST">
                         @csrf
                      
                         <div class="form-group">
                           <input type="hidden"  class="form-control" name="cliente_id" value="Auth::user()->cliente->user_id">
                         </div>
                         <div class="form-group">
                           <input type="number" placeholder="Codigo Postal Origen" class="form-control" name="cp_origen">
                         </div>
                          <div class="form-group">
                           <input type="number" placeholder="Codigo Postal Destino" class="form-control" name="cp_destino">
                         </div>
                         <div class="form-group">
                           <input type="number" placeholder="largo" class="form-control" name="largo">
                         </div>
                          <div class="form-group">
                           <input type="number" placeholder="Ancho" class="form-control" name="ancho">
                         </div>
                          <div class="form-group">
                           <input type="number" placeholder="Alto" class="form-control" name="alto">
                         </div>
                          <div class="form-group">
                           <input type="number" placeholder="Peso" class="form-control" name="peso">
                         </div>
                          <div class="form-group">
                        
                            <select class="custom-select" id="inputGroupSelect01" name="tipo_paquete">
                                            <option selected>Tipo de paquete</option>
                                                <option value="0">Documento </option>
                                                <option value="1">Paquete </option>
                                              </select>
                         </div>
                          <div class="form-group">
                                 <button  class="btn btn-primary">Cotizar</button>
                            </div>
                       </form>
                   </div>

                      
            </div>
        </div>
    </div>
</div>
@endsection
