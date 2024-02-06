@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? "{{ __('Show') Persona" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('persona.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $persona->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $persona->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $persona->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $persona->Correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
