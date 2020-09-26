@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>Nuevo Cliente <i class="fas fa-users"></i></strong></h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('clients.store') }}" method="post" id="clients-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="required">{{ __('Nombre') }}</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="{{ __('Ingrese el nombre') }}"
                                               value="{{ old('name', $client->name) }}" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="document" class="required">{{ __('Documento de Identidad') }}</label>
                                        <input type="number" class="form-control @error('document') is-invalid @enderror" id="document" name="document" placeholder="{{ __('Ingrese el documento de identidad') }}"
                                               value="{{ old('document', $client->document) }}" required>
                                        @error('document')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nationality_id" class="required">{{ __('País') }}</label>
                                        <select class="custom-select @error('nationality_id') is-invalid @enderror" id="nationality_id" name="nationality_id" required>
                                            <option value="">{{ __('Seleccione el país de procedencia') }}</option>
                                            @foreach($nationalities as $nationality)
                                                <option value="{{ $nationality->id }}"
                                                    {{ old('nationality_id', $client->nationality_id) == $nationality->id ? 'selected' : ''}}>{{ $nationality->country }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('nationality_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">{{ __('Teléfono') }}</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="{{ __('Ingrese un teléfono') }}"
                                               value="{{ old('phone', $client->phone) }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">{{ __('Dirección') }}</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="{{ __('Ingrese la dirección') }}"
                                               value="{{ old('address', $client->address) }}">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('clients.index') }}" class="btn btn-danger">
                            <i class="fas fa-arrow-left"></i> {{ __('Cancelar') }}
                        </a>
                        <button type="submit" class="btn btn-success" form="clients-form">
                            <i class="fas fa-save"></i> {{ __('Guardar') }}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
