@extends('layouts.clientes.template')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header h4">{{ __('Credito') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Empresa') }}</label>

                                <div class="col-md-6">
                                    <select class="custom-select">
                                        <option value="0" >Delivery1</option >
                                        <option value="1" >Delivery2</option >
                                        <option value="2" >Delivery3</option >
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Forma de Pago') }}</label>

                                <div class="col-md-6">
                                    <select class="custom-select">
                                        <option value="0" >Deposito</option >
                                        <option value="1" >Tarjeta</option >
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="numGuia" class="col-md-4 col-form-label text-md-right">{{ __('Numero de guias') }}</label>

                                <div class="col-md-6">
                                    <input id="numGuia" type="number" class="form-control @error('numGuia') is-invalid @enderror" name="numGuia" value="{{ old('numGuia') }}" required autocomplete="numGuia" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('BUSCAR') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
