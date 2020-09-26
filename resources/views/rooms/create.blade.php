@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>Nueva Habitación <i class="fas fa-door-closed"></i></strong></h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('rooms.store') }}" method="post" id="rooms-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="number" class="required">{{ __('Número') }}</label>
                                        <input type="number" class="form-control @error('number') is-invalid @enderror" id="number" name="number" placeholder="{{ __('Ingrese el número de la habitación') }}"
                                               value="{{ old('number', $room->number) }}" required>
                                        @error('number')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status" class="required">{{ __('Estado') }}</label>
                                        <select class="custom-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                            <option value="">{{ __('Seleccione el estado') }}</option>
                                            <option value="Disponible">Disponible</option>
                                            <option value="No Disponible">No Disponible</option>
                                        </select>
                                        @error('status')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cost" class="required">{{ __('Costo') }}</label>
                                        <input type="number" class="form-control @error('cost') is-invalid @enderror" id="cost" name="cost" placeholder="{{ __('Ingrese el costo de la habitación') }}"
                                               value="{{ old('cost', $room->cost) }}" required>
                                        @error('cost')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type_id" class="required">{{ __('Tipo') }}</label>
                                        <select class="custom-select @error('type_id') is-invalid @enderror" id="type_id" name="type_id" required>
                                            <option value="">{{ __('Seleccione el tipo de habitación') }}</option>
                                            @foreach($types as $type)
                                                <option value="{{ $type->id }}"{{ old('type_id', $room->type_id) == $type->id ? 'selected' : ''}}>{{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('type_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="required">{{ __('Descripción') }}</label>
                                        <textarea class="form-control" id="description" name="description" placeholder="{{ __('Ingrese la descripción') }}">{{ old('description', $room->description) }}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('rooms.index') }}" class="btn btn-danger">
                            <i class="fas fa-arrow-left"></i> {{ __('Cancelar') }}
                        </a>
                        <button type="submit" class="btn btn-success" form="rooms-form">
                            <i class="fas fa-save"></i> {{ __('Guardar') }}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
