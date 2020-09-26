@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @if(session('info'))
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2">
                                <div class="alert alert-info">
                                    {{ session('info') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card shadow-lg">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title mb-0"><strong>Habitaciones <i class="fas fa-door-closed"></i></strong></h3>
                    </div>

                    <!-- Create new room -->
                    <nav class="navbar navbar-light bg-light">
                        <a href="{{ route('rooms.create') }}"
                           class="btn btn-success">
                            <i class="fas fa-plus"></i> Crear nueva habitacion
                        </a>
                    </nav>

                    <!-- Rooms list -->
                    <div class="table-responsive-xl">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>{{ __('Número') }}</th>
                                <th>{{ __('Estado') }}</th>
                                <th>{{ __('Costo') }}</th>
                                <th>{{ __('Tipo') }}</th>
                                <th class="text-right">{{ __('Acciones') }}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse($rooms as $room)
                                <tr>
                                    <td>{{ $room->number }}</td>
                                    <td>{{ $room->status }}</td>
                                    <td>${{ number_format($room->cost, 2)}}</td>
                                    <td>{{ $room->type->name }}</td>
                                    <td class="text-right">

                                        <!-- CRUD buttons -->
                                        <div aria-label="{{ __('Actions') }}">
                                            <a href="{{ route('rooms.show', $room) }}"
                                               class="btn btn-outline-info"> Ver
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('rooms.edit', $room) }}"
                                               class="btn btn-outline-secondary"> Editar
                                                <i class="fas fa-edit"></i>
                                            </a>

                                                <button type="button" class="btn btn-outline-danger"
                                                        data-route="{{ route('rooms.destroy', $room) }}"
                                                        data-toggle="modal" data-target="#confirmDeleteModal">
                                                    Eliminar
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Alert when there are no rooms -->
                            @empty
                                <tr>
                                    <p class="alert alert-secondary text-center">
                                        {{ __('No se encontraron registros') }}
                                    </p>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <ul class="pagination justify-content-center">
                            {{ $rooms->links() }}
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('modals')
    @include('modals.confirm_delete')
@endpush

@push('scripts')
    <script src="{{ asset(mix('js/delete-element.js')) }}"></script>
@endpush
