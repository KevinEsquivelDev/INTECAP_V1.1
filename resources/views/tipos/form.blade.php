<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_tipo') }}
            {{ Form::text('id_tipo', $tipo->id_tipo, ['class' => 'form-control' . ($errors->has('id_tipo') ? ' is-invalid' : ''), 'placeholder' => 'Id tipo']) }}
            {!! $errors->first('id_tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $tipo->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $tipo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'descricion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
