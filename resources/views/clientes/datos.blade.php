@extends('layouts.clientes.template')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('DATOS PERSONALES') }}</div>
                            
                   <div class="card-body">
                          <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombre</span>
                          </div>
                          <input type="text" class="form-control"  value="{{$datos->nombre}}  {{$datos->paterno}} {{$datos->materno}}" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" disabled>
                        </div>

                         <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rfc</span>
                          </div>
                          <input type="text" class="form-control" value="{{$datos->rfc}}" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" disabled>
                        </div>
                         <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Telefono</span>
                          </div>
                          <input type="text" class="form-control" value="{{$datos->telefono}}" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" disabled>
                        </div>
                         <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Celular</span>
                          </div>
                          <input type="text" class="form-control"  value="{{$datos->celular}}" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" disabled>
                        </div>
                          <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">INE FRONTA</span>
                          </div>
                          <img src="{{ asset($datos->Ine_front) }}" alt="" style="width:100px; height: 80px">
                        </div>
                     

                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">INE TRASERA</span>
                          </div>
                          <img src="{{ asset($datos->Ine_back) }}" alt="" style="width:100px; height: 80px">
                        </div>
                   </div>

                      
            </div>
        </div>
    </div>
</div>
@endsection