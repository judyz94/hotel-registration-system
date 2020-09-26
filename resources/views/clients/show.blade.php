@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-14">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>{{ __('Cliente') }} {{ $client->name }}</strong></h4>
                    </div>

                    <!-- Client detail information -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-3">{{ __('Nombre') }}</dt>
                            <dd class="col-md-3">{{ $client->name }}</dd>

                            <dt class="col-md-3">{{ __('Documento de Identidad') }}</dt>
                            <dd class="col-md-3">{{ $client->document }}</dd>

                            <dt class="col-md-3">{{ __('Teléfono') }}</dt>
                            <dd class="col-md-3">{{ $client->phone }}</dd>

                            <dt class="col-md-3">{{ __('Nacionalidad') }}</dt>
                            <dd class="col-md-3">{{ $client->nationality->nationality }}</dd>

                            <dt class="col-md-3">{{ __('Dirección') }}</dt>
                            <dd class="col-md-3">{{ $client->address }}</dd>
                        </dl>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('clients.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Volver a listado de clientes
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
