@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4">{{ __('CREAR USUARIO') }}</div>
                 
                <div class="card-body">
                                    @foreach ($errors->all() as $error)
                                  <li> <strong>{{ $error}}</strong></li>
                                
                                    @endforeach
                        <form name="Form" method="POST" action="{{ route('users.store') }}">
                              {{ csrf_field() }}
                            <div class="form-group">
                                 <input type="text" name="name" class="form-control" placeholder="Nombre de usuario " value="{{ old('name') }}">
                                 
                            </div>
                              <div class="form-group">
                                 <input type="text" name="email" class="form-control" placeholder="Email de usuario " value="{{ old('email') }}">
                                  
                            </div>
                              <div class="form-group">
                                 <input type="password" name="password" class="form-control" placeholder="Password de usuario " value="{{ old('password') }}">
                                 
                            </div>
                              <div class="form-group">
                                  <select class="custom-select" id="inputGroupSelect01" name="role">
                                            <option selected>ROL</option>
                                                @foreach($Roles as $role)
                                                @if($role->name != 'cliente')
                                                <option value="{{$role->id}}">{{$role->name}} </option>  
                                                @endif  
                                                @endforeach
                                              </select>
                            </div>
                             @error('role')
                                    
                                @enderror
                            <div class="form-group">
                                 <button  class="btn btn-primary">GUARDAR</button>
                            </div>
                        </form>
                    <!-- {{ __('Bienvenido!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
