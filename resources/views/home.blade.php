@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('HOTEL SOFT') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('El Hotel Soft es una estancia especial para aquellos que disfruten de la naturaleza y su sencillez,
                    nuestras habitaciones y lugares comunes son la medida de ella, nos inspiran todos los días y nos invitan a
                    la serenidad y la calma.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
