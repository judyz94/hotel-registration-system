@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>Nuevo Alquiler <i class="fas fa-bell"></i></strong></h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('rentals.store') }}" method="post" id="rentals-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="check_in" class="required">{{ __('Fecha de Ingreso') }}</label>
                                        <input type="date" class="form-control @error('check_in') is-invalid @enderror" id="check_in" name="check_in"
                                               value="{{ old('check_in', $rental->check_in) }}" required>
                                        @error('check_in')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="check_out" class="required">{{ __('Fecha de Salida') }}</label>
                                        <input type="date" class="form-control @error('check_out') is-invalid @enderror" id="check_out" name="check_out"
                                               value="{{ old('check_out', $rental->check_out) }}" required>
                                        @error('check_out')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_cost" class="required">{{ __('Total') }}</label>
                                        <input type="number" class="form-control @error('total_cost') is-invalid @enderror" id="total_cost" name="total_cost" placeholder="{{ __('Ingrese el costo total') }}"
                                               value="{{ old('total_cost', $rental->total_cost) }}" required>
                                        @error('total_cost')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="room_id" class="required">{{ __('Número de habitación') }}</label>
                                        <select class="custom-select @error('room_id') is-invalid @enderror" id="room_id" name="room_id" required>
                                            <option value="">{{ __('Seleccione el número de habitación') }}</option>
                                            @foreach($rooms as $room)
                                                <option value="{{ $room->id }}"
                                                    {{ old('room_id', $rental->room_id) == $room->id ? 'selected' : ''}}>{{ $room->number }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('room_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="client_id" class="required">{{ __('Cliente') }}</label>
                                        <select class="custom-select @error('client_id') is-invalid @enderror" id="client_id" name="client_id" required>
                                            <option value="">{{ __('Seleccione el nombre del cliente') }}</option>
                                            @foreach($clients as $client)
                                                <option value="{{ $client->id }}"
                                                    {{ old('client_id', $rental->client_id) == $client->id ? 'selected' : ''}}>{{ $client->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('client_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status_id" class="required">{{ __('Estado del Alquiler') }}</label>
                                        <select class="custom-select @error('status_id') is-invalid @enderror" id="status_id" name="status_id" required>
                                            <option value="">{{ __('Seleccione el estado') }}</option>
                                            @foreach($statuses as $status)
                                                <option value="{{ $status->id }}"
                                                    {{ old('status_id', $rental->status_id) == $status->id ? 'selected' : ''}}>{{ $status->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('status_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="receptionist_id" class="required">{{ __('Registrador') }}</label>
                                        <select class="custom-select @error('receptionist_id') is-invalid @enderror" id="receptionist_id" name="receptionist_id" required>
                                            <option value="">{{ __('Seleccione el nombre del registrador') }}</option>
                                            @foreach($receptionists as $receptionist)
                                                <option value="{{ $receptionist->id }}"
                                                    {{ old('receptionist_id', $rental->receptionist_id) == $receptionist->id ? 'selected' : ''}}>{{ $receptionist->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('receptionist_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="observation">{{ __('Observaciones') }}</label>
                                        <textarea class="form-control" id="observation" name="observation" placeholder="{{ __('Ingrese las observaciones') }}">{{ old('observation', $rental->observation) }}</textarea>
                                        @error('observation')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('rentals.index') }}" class="btn btn-danger">
                            <i class="fas fa-arrow-left"></i> {{ __('Cancelar') }}
                        </a>
                        <button type="submit" class="btn btn-success" form="rentals-form">
                            <i class="fas fa-save"></i> {{ __('Guardar') }}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
