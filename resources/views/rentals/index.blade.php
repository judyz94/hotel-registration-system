@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">

                @if(session('info'))
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-md-offset-2">
                                <div class="alert alert-info">
                                    {{ session('info') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card shadow-lg">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title mb-0"><strong>Alquileres <i class="fas fa-bell"></i></strong></h3>
                    </div>

                    <!-- Create new rental -->
                    <nav class="navbar navbar-light bg-light">
                        <a href="{{ route('rentals.create') }}"
                           class="btn btn-success">
                            <i class="fas fa-plus"></i> Crear nuevo alquiler
                        </a>
                    </nav>

                    <!-- Rentals list -->
                    <div class="table-responsive-xl">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>{{ __('N° de Alquiler') }}</th>
                                <th>{{ __('Hora de Ingreso') }}</th>
                                <th>{{ __('Hora de Salida') }}</th>
                                <th>{{ __('Total') }}</th>
                                <th>{{ __('N° de Habitación') }}</th>
                                <th>{{ __('Estado') }}</th>
                                <th class="text-right">{{ __('Acciones') }}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse($rentals as $rental)
                                <tr>
                                    <td>{{ $rental->id }}</td>
                                    <td>{{ $rental->check_in }}</td>
                                    <td>{{ $rental->check_out }}</td>
                                    <td>${{ number_format($rental->total_cost, 2) }}</td>
                                    <td>{{ $rental->room->number }}</td>
                                    <td>{{ $rental->status->name }}</td>
                                    <td class="text-right">

                                        <!-- CRUD buttons -->
                                        <div aria-label="{{ __('Actions') }}">
                                            <a href="{{ route('rentals.show', $rental) }}"
                                               class="btn btn-outline-info"> Ver
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('rentals.edit', $rental) }}"
                                               class="btn btn-outline-secondary"> Editar
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Alert when there are no rentals -->
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
                            {{ $rentals->links() }}
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
