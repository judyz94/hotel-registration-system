@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>{{ __('Estado') }} <i class="fas fa-arrow-right"></i>  {{ $status->name }}</strong></h4>
                    </div>

                    <!-- client detail information -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-3">{{ __('Nombre') }}</dt>
                            <dd class="col-md-3">{{ $status->name }}</dd>
                        </dl>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('statuses.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Volver a listado de estados
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
