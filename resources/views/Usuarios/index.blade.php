@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4">{{ __('USUARIOS DEL SISTEMA') }}</div>
                       <a href="{{ route('users.create') }}" class="btn btn-dark">
                         <!--  <i
                            class="far fa-add"> </i> -->
                           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            CREAR USUARIO
                        </a>

                <div class="card-body ">

                      <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)

                                    <tr>
                                        <td>{{$usuario->id}} </td>
                                        <td>{{$usuario->name}} </td>
                                        <td>{{$usuario->email}} </td>
                                        <td>
                                            <a href="{{ route('users.edit',$usuario->id) }}" class="btn btn-primary">Editar</a>
                                         <form role="form" method="POST" action="{{ route('users.destroy',$usuario->id) }}">
                                            @method('DELETE')
                                              @csrf
                                            <input type="hidden" name="_method" value="DELETE">

                                          <button type="submit" class="btn btn-danger" role="button" id="butonBorrar">
                                               ELIMINAR
                                             </button>
                                          </form>
                                        </td>
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
