@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-14">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>{{ __('Habitación N°') }} {{ $room->number }}</strong></h4>
                    </div>

                    <!-- client detail information -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-3">{{ __('Número') }}</dt>
                            <dd class="col-md-3">{{ $room->number }}</dd>

                            <dt class="col-md-3">{{ __('Estado') }}</dt>
                            <dd class="col-md-3">{{ $room->status }}</dd>

                            <dt class="col-md-3">{{ __('Costo') }}</dt>
                            <dd class="col-md-3">${{ number_format($room->cost, 2)}}</dd>

                            <dt class="col-md-3">{{ __('Tipo') }}</dt>
                            <dd class="col-md-3">{{ $room->type->name }}</dd>

                            <dt class="col-md-3">{{ __('Descripción') }}</dt>
                            <dd class="col-md-3">{{ $room->description }}</dd>
                        </dl>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Volver a listado de habitaciones
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
