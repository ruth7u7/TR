@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Lugar Turistico
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Lugar Turistico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lugar-turisticos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lugar-turistico.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
