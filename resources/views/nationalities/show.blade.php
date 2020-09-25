@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>{{ __('Nacionalidad de') }} {{ $nationality->country }}</strong></h4>
                    </div>

                    <!-- Nationality detail information -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-3">{{ __('País') }}</dt>
                            <dd class="col-md-3">{{ $nationality->country }}</dd>
                        </dl>

                        <dl class="row">
                        <dt class="col-md-3">{{ __('Nacionalidad') }}</dt>
                        <dd class="col-md-3">{{ $nationality->nationality }}</dd>
                        </dl>

                        <br>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('nationalities.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Volver a listado de nacionalidades
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
