<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ciudad') }}
            {{ Form::text('id_ciudad', $sede->id_ciudad, ['class' => 'form-control' . ($errors->has('id_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Id Ciudad']) }}
            {!! $errors->first('id_ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $sede->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_trabajadores') }}
            {{ Form::text('numero_trabajadores', $sede->numero_trabajadores, ['class' => 'form-control' . ($errors->has('numero_trabajadores') ? ' is-invalid' : ''), 'placeholder' => 'Numero Trabajadores']) }}
            {!! $errors->first('numero_trabajadores', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_buses') }}
            {{ Form::text('numero_buses', $sede->numero_buses, ['class' => 'form-control' . ($errors->has('numero_buses') ? ' is-invalid' : ''), 'placeholder' => 'Numero Buses']) }}
            {!! $errors->first('numero_buses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $sede->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>