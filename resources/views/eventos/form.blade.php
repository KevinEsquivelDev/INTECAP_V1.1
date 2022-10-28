<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_evento') }}
            {{ Form::text('id_evento', $evento->id_evento, ['class' => 'form-control' . ($errors->has('id_evento') ? ' is-invalid' : ''), 'placeholder' => 'Id evento']) }}
            {!! $errors->first('id_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio') }}
            {{ Form::text('anio', $evento->anio, ['class' => 'form-control' . ($errors->has('anio') ? ' is-invalid' : ''), 'placeholder' => 'anio']) }}
            {!! $errors->first('anio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programa') }}
            {{ Form::text('programa', $evento->programa, ['class' => 'form-control' . ($errors->has('programa') ? ' is-invalid' : ''), 'placeholder' => 'programa']) }}
            {!! $errors->first('programa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dias_horario') }}
            {{ Form::text('dias_horario', $evento->dias_horario, ['class' => 'form-control' . ($errors->has('dias_horario') ? ' is-invalid' : ''), 'placeholder' => 'dias_horario']) }}
            {!! $errors->first('dias_horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
