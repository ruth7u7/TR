@extends('layouts.app')

@section('template_title')
    {{ $lugarTuristico->name ?? "{{ __('Show') Lugar Turistico" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lugar Turistico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lugar-turisticos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $lugarTuristico->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $lugarTuristico->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ciudad:</strong>
                            {{ $lugarTuristico->id_ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Registro:</strong>
                            {{ $lugarTuristico->estado_registro }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
