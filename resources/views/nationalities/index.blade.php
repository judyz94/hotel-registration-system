@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @if(session('info'))
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-2">
                                <div class="alert alert-info">
                                    {{ session('info') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card shadow-lg">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title mb-0"><strong>Nacionalidades <i class="fas fa-flag"></i></strong></h3>
                    </div>

                    <!-- Create new client -->
                    <nav class="navbar navbar-light bg-light">
                        <a href="{{ route('nationalities.create') }}"
                           class="btn btn-success">
                            <i class="fas fa-plus"></i> Crear nueva nacionalidad
                        </a>
                    </nav>

                    <!-- nationalities list -->
                    <div class="table-responsive-xl">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>{{ __('País') }}</th>
                                <th>{{ __('Nacionalidad') }}</th>
                                <th class="text-right">{{ __('Acciones') }}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse($nationalities as $nationality)
                                <tr>
                                    <td>{{ $nationality->country }}</td>
                                    <td>{{ $nationality->nationality }}</td>
                                    <td class="text-right">

                                        <!-- CRUD buttons -->
                                        <div aria-label="{{ __('Actions') }}">
                                            <a href="{{ route('nationalities.show', $nationality) }}"
                                               class="btn btn-outline-info"> Ver
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('nationalities.edit', $nationality) }}"
                                               class="btn btn-outline-secondary"> Editar
                                                <i class="fas fa-edit"></i>
                                            </a>

                                                <button type="button" class="btn btn-outline-danger"
                                                        data-route="{{ route('nationalities.destroy', $nationality) }}"
                                                        data-toggle="modal" data-target="#confirmDeleteModal">
                                                    Eliminar
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Alert when there are no nationalities -->
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
                            {{ $nationalities->links() }}
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
