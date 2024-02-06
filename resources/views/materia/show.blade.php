@extends('layouts.app')

@section('template_title')
    {{ $materia->name ?? "{{ __('Show') Materia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Personaid:</strong>
                            {{ $materia->personaid }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Materia:</strong>
                            {{ $materia->Nombre_materia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
