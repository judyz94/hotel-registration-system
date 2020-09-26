@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>{{ __('Habitación tipo') }} {{ $type->name }}</strong></h4>
                    </div>

                    <!-- Room type detail information -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-3">{{ __('Nombre') }}</dt>
                            <dd class="col-md-3">{{ $type->name }}</dd>
                        </dl>

                        <dl class="row">
                            <dt class="col-md-3">{{ __('Descripción') }}</dt>
                            <dd class="col-md-3">{{ $type->description }}</dd>
                        </dl>

                        <br>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('types.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Volver a listado de tipos de habitación
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
