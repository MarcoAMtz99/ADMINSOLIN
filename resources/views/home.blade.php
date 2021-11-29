@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(auth()->user()->hasRole('admin'))
                    {{ __('Bienvenido!') }}
                    @elseif(auth()->user()->hasRole('cliente'))
                    <p class="display-3">USTED NO TIENE PERMISO PARA VISUALIZAR ESTA PARTE</p>
                    <a href="{{url('/cliente')}} ">VOLVER A CLIENTE DASHBOADR</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
