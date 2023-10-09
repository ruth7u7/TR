<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::text('id_cliente', $viaje->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_fecha') }}
            {{ Form::text('id_fecha', $viaje->id_fecha, ['class' => 'form-control' . ($errors->has('id_fecha') ? ' is-invalid' : ''), 'placeholder' => 'Id Fecha']) }}
            {!! $errors->first('id_fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sede') }}
            {{ Form::text('id_sede', $viaje->id_sede, ['class' => 'form-control' . ($errors->has('id_sede') ? ' is-invalid' : ''), 'placeholder' => 'Id Sede']) }}
            {!! $errors->first('id_sede', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_bus') }}
            {{ Form::text('id_bus', $viaje->id_bus, ['class' => 'form-control' . ($errors->has('id_bus') ? ' is-invalid' : ''), 'placeholder' => 'Id Bus']) }}
            {!! $errors->first('id_bus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('destino') }}
            {{ Form::text('destino', $viaje->destino, ['class' => 'form-control' . ($errors->has('destino') ? ' is-invalid' : ''), 'placeholder' => 'Destino']) }}
            {!! $errors->first('destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duracion_viaje') }}
            {{ Form::text('duracion_viaje', $viaje->duracion_viaje, ['class' => 'form-control' . ($errors->has('duracion_viaje') ? ' is-invalid' : ''), 'placeholder' => 'Duracion Viaje']) }}
            {!! $errors->first('duracion_viaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo') }}
            {{ Form::text('costo', $viaje->costo, ['class' => 'form-control' . ($errors->has('costo') ? ' is-invalid' : ''), 'placeholder' => 'Costo']) }}
            {!! $errors->first('costo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>