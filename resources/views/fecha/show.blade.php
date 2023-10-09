@extends('layouts.app')

@section('template_title')
    {{ $fecha->name ?? "{{ __('Show') Fecha" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fecha</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fechas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $fecha->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $fecha->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
