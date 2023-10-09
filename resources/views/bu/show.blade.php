@extends('layouts.app')

@section('template_title')
    {{ $bu->name ?? "{{ __('Show') Bu" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bus.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $bu->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $bu->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $bu->marca }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
