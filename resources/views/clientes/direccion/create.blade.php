@extends('layouts.clientes.template')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4">{{ __('AGREGAR DIRECCION') }}</div>
                               @foreach ($errors->all() as $error)
                                  <li> <strong>{{ $error}}</strong></li>

                                    @endforeach
                   <div class="card-body">
                       <form action="{{ route('direccion.store') }}" method="POST">
                         @csrf

                         <div class="form-group">
                           <input type="hidden"  class="form-control" name="cliente_id" value="{{Auth::user()->cliente->id}}">
                         </div>
                                                     
                            <div class="form-group">
                              <input type="text" name="calle" placeholder="calle" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" name="num_ext" placeholder="num_ext" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" name="num_int" placeholder="num_int" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" name="colonia" placeholder="colonia" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" name="cp" placeholder="cp" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" name="ciudad" placeholder="ciudad" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" name="pais" placeholder="pais" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" name="alc_mun" placeholder="alc_mun" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" name="destinatario" placeholder="destinatario" class="form-control">
                            </div>
                            <div class="form-group">
                              <input type="text" name="telefono" placeholder="telefono" class="form-control">
                            </div>

                          <div class="form-group">
                         </div>
                          <div class="form-group">
                                 <button  class="btn btn-primary">Agregar</button>
                            </div>
                       </form>
                   </div>

                      
            </div>
        </div>
    </div>
</div>
@endsection
