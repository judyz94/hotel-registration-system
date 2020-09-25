@extends('layouts.menu')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-14">

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
                        <h3 class="card-title mb-0"><strong>Clientes <i class="fas fa-users"></i></strong></h3>
                    </div>

                    <!-- Create new client -->
                    <nav class="navbar navbar-light bg-light">
                        <a href="{{ route('clients.create') }}"
                           class="btn btn-success">
                            <i class="fas fa-plus"></i> Crear nuevo cliente
                        </a>
                    </nav>

                    <!-- Clients list -->
                    <div class="table-responsive-xl">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>{{ __('Nombre') }}</th>
                                <th>{{ __('Documento') }}</th>
                                <th>{{ __('Nacionalidad') }}</th>
                                <th>{{ __('Teléfono') }}</th>
                                <th>{{ __('Dirección') }}</th>
                                <th>{{ __('Acciones') }}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse($clients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->document }}</td>
                                    <td>{{ $client->nationality->nationality }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->address }}</td>
                                    <td class="text-right">

                                        <!-- CRUD buttons -->
                                        <div aria-label="{{ __('Actions') }}">
                                            <a href="{{ route('clients.show', $client) }}"
                                               class="btn btn-outline-info"> Ver
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('clients.edit', $client) }}"
                                               class="btn btn-outline-secondary"> Editar
                                                <i class="fas fa-edit"></i>
                                            </a>

                                                <button type="button" class="btn btn-outline-danger"
                                                        data-route="{{ route('clients.destroy', $client) }}"
                                                        data-toggle="modal" data-target="#confirmDeleteModal">
                                                    Eliminar
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Alert when there are no clients -->
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
                            {{ $clients->links() }}
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
