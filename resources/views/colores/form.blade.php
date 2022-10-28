<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_color') }}
            {{ Form::text('id_color', $color->id_color, ['class' => 'form-control' . ($errors->has('id_color') ? ' is-invalid' : ''), 'placeholder' => 'Id Color']) }}
            {!! $errors->first('id_color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Color') }}
            {{ Form::text('color', $color->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
