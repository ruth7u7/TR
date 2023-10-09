@extends('layouts.app')

@section('template_title')
    {{ $viaje->name ?? "{{ __('Show') Viaje" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('viajes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $viaje->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Fecha:</strong>
                            {{ $viaje->id_fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sede:</strong>
                            {{ $viaje->id_sede }}
                        </div>
                        <div class="form-group">
                            <strong>Id Bus:</strong>
                            {{ $viaje->id_bus }}
                        </div>
                        <div class="form-group">
                            <strong>Destino:</strong>
                            {{ $viaje->destino }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion Viaje:</strong>
                            {{ $viaje->duracion_viaje }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $viaje->costo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
