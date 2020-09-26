@extends('layouts.menu')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header pb-0">
                    <h4 class="card-title"><strong>{{ __('Editar Estado ') }} <i class="fas fa-arrow-right"></i>  {{ $status->name }} </strong></h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('statuses.update', $status) }}" method="post" id="statuses-form">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="name" class="required">{{ __('Nombre') }}</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="{{ __('Ingrese el nombre') }}"
                                           value="{{ old('name', $status->name) }}" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('statuses.index') }}" class="btn btn-danger">
                        <i class="fas fa-arrow-left"></i> {{ __('Cancelar') }}
                    </a>
                    <button type="submit" class="btn btn-success" form="statuses-form">
                        <i class="fas fa-save"></i> {{ __('Actualizar') }}
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
