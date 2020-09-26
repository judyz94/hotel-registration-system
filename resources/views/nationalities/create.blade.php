@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>Nueva Nacionalidad <i class="fas fa-flag"></i></strong></h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('nationalities.store') }}" method="post" id="nationalities-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country" class="required">{{ __('País') }}</label>
                                        <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="{{ __('Ingrese el país') }}"
                                               value="{{ old('country', $nationality->name) }}" required>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nationality" class="required">{{ __('Nacionalidad') }}</label>
                                        <input type="text" class="form-control @error('document') is-invalid @enderror" id="nationality" name="nationality" placeholder="{{ __('Ingrese la nacionalidad') }}"
                                               value="{{ old('nationality', $nationality->document) }}" required>
                                        @error('nationality')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('nationalities.index') }}" class="btn btn-danger">
                            <i class="fas fa-arrow-left"></i> {{ __('Cancelar') }}
                        </a>
                        <button type="submit" class="btn btn-success" form="nationalities-form">
                            <i class="fas fa-save"></i> {{ __('Guardar') }}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
