@extends('layouts.clientes.verify')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                 <img src="{{ asset('img/logos/logo_completo.png') }}" alt="">
                 <div class="card-header">{{ __('Verifica tu direccion de correo electronico') }}</div>

                <div class="card-body">

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, verifique su correo electrónico para ver si hay un enlace de verificación.') }}
                    {{ __('Si no recibió el correo electrónico') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
             <button type="submit" class="btn btn-link">{{ __('haga clic aquí para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
