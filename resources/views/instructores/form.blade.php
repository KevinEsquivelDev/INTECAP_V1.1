<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_inst') }}
            {{ Form::text('id_inst', $instructor->id_inst, ['class' => 'form-control' . ($errors->has('id_inst') ? ' is-invalid' : ''), 'placeholder' => 'Id instructor']) }}
            {!! $errors->first('id_inst', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $instructor->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $instructor->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('especialidad') }}
            {{ Form::text('especialidad', $instructor->especialidad, ['class' => 'form-control' . ($errors->has('especialidad') ? ' is-invalid' : ''), 'placeholder' => 'especialidad']) }}
            {!! $errors->first('especialidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cui') }}
            {{ Form::text('cui', $instructor->cui, ['class' => 'form-control' . ($errors->has('cui') ? ' is-invalid' : ''), 'placeholder' => 'cui']) }}
            {!! $errors->first('cui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
