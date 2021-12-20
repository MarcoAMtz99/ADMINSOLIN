@extends('layouts.clientes.template')

@section('content')
    <style>
        .navigator{
            background: #000000;
            color: #ffffff;
            text-align: center;
            padding-top: 9rem;
            height: 20rem;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header h4">{{ __('Rastreo') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="numGuia" class="col-md-4 col-form-label text-md-right">{{ __('Numero de guia') }}</label>

                                <div class="col-md-6">
                                    <input id="numGuia" type="text" class="form-control @error('numGuia') is-invalid @enderror" name="numGuia" value="{{ old('numGuia') }}" required autocomplete="numGuia" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

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

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('BUSCAR') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="dropdown-divider"></div>

                        <div class="navigator">
                            <div>
                                No se encuentra el producto
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
