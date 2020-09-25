@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-14">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>{{ __('Registrador') }} {{ $receptionist->name }}</strong></h4>
                    </div>

                    <!-- Receptionist detail information -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-3">{{ __('Nombre') }}</dt>
                            <dd class="col-md-3">{{ $receptionist->name }}</dd>

                            <dt class="col-md-3">{{ __('Documento de Identidad') }}</dt>
                            <dd class="col-md-3">{{ $receptionist->document }}</dd>

                            <dt class="col-md-3">{{ __('Teléfono') }}</dt>
                            <dd class="col-md-3">{{ $receptionist->phone }}</dd>

                            <dt class="col-md-3">{{ __('Dirección') }}</dt>
                            <dd class="col-md-3">{{ $receptionist->address }}</dd>

                            <dt class="col-md-3">{{ __('Estado') }}</dt>
                            <dd class="col-md-3">{{ $receptionist->status }}</dd>

                            <dt class="col-md-3">{{ __('Observaciones') }}</dt>
                            <dd class="col-md-3">{{ $receptionist->observation }}</dd>
                        </dl>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('receptionists.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Volver a listado de registradores
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
