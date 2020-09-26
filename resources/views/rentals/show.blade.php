@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-14">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>{{ __('Alquiler N°') }} {{ $rental->id }}</strong></h4>
                    </div>

                    <!-- Rental detail information -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-3">{{ __('Hora de Ingreso') }}</dt>
                            <dd class="col-md-3">{{ $rental->check_in }}</dd>

                            <dt class="col-md-3">{{ __('Hora de Salida') }}</dt>
                            <dd class="col-md-3">{{ $rental->check_out }}</dd>

                            <dt class="col-md-3">{{ __('Total') }}</dt>
                            <dd class="col-md-3">${{ number_format($rental->total_cost, 2) }}</dd>

                            <dt class="col-md-3">{{ __('N° de Habitación') }}</dt>
                            <dd class="col-md-3">{{ $rental->room->number }}</dd>

                            <dt class="col-md-3">{{ __('Cliente') }}</dt>
                            <dd class="col-md-3">{{ $rental->client->name }}</dd>

                            <dt class="col-md-3">{{ __('Estado') }}</dt>
                            <dd class="col-md-3">{{ $rental->status->name }}</dd>

                            <dt class="col-md-3">{{ __('Registrador') }}</dt>
                            <dd class="col-md-3">{{ $rental->receptionist->name }}</dd>

                            <dt class="col-md-3">{{ __('Observaciones') }}</dt>
                            <dd class="col-md-3">{{ $rental->observation }}</dd>
                        </dl>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('rentals.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Volver a listado de alquileres
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
