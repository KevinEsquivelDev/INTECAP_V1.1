<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('correlativo') }}
            {{ Form::text('correlativo', $equipo->correlativo, ['class' => 'form-control' . ($errors->has('correlativo') ? ' is-invalid' : ''), 'placeholder' => 'correlativo']) }}
            {!! $errors->first('correlativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio_operacion') }}
            {{ Form::text('anio_operacion', $equipo->anio_operacion, ['class' => 'form-control' . ($errors->has('anio_operacion') ? ' is-invalid' : ''), 'placeholder' => 'anio_operacion']) }}
            {!! $errors->first('anio_operacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asignar Evento de Formación') }}
            {{ Form::select('id_evento',$evento, $equipos->id_evento, ['class' => 'form-control' . ($errors->has('id_evento') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar...']) }}
            {!! $errors->first('id_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asignar Instructor a Cargo') }}
            {{ Form::select('id_inst',$instructor, $equipos->id_inst, ['class' => 'form-control' . ($errors->has('id_inst') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar...']) }}
            {!! $errors->first('id_inst', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asignar Participante Responsable') }}
            {{ Form::select('id_part',$participante, $equipos->id_part, ['class' => 'form-control' . ($errors->has('id_part') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar...']) }}
            {!! $errors->first('id_part', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asignar Cliente') }}
            {{ Form::select('id_cliente',$cliente, $equipos->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar...']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asignar Tipo de Equipo') }}
            {{ Form::select('id_tipo',$tipo, $equipos->id_tipo, ['class' => 'form-control' . ($errors->has('id_tipo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar...']) }}
            {!! $errors->first('id_tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asignar Marca') }}
            {{ Form::select('id_marca',$marca, $equipos->id_marca, ['class' => 'form-control' . ($errors->has('id_marca') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar...']) }}
            {!! $errors->first('id_marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('modelo_equipo', $equipo->modelo_equipo, ['class' => 'form-control' . ($errors->has('modelo_equipo') ? ' is-invalid' : ''), 'placeholder' => 'modelo_equipo']) }}
            {!! $errors->first('modelo_equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serie') }}
            {{ Form::text('serie_equipo', $equipo->serie_equipo, ['class' => 'form-control' . ($errors->has('serie_equipo') ? ' is-invalid' : ''), 'placeholder' => 'serie_equipo']) }}
            {!! $errors->first('serie_equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asignar Color del equipo') }}
            {{ Form::select('id_color',$color, $equipos->id_color, ['class' => 'form-control' . ($errors->has('id_color') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar...']) }}
            {!! $errors->first('id_color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fotografía frontal del Equipo') }}
            {{ Form::data('foto_equipo', $equipo->foto_equipo, ['class' => 'form-control' . ($errors->has('foto_equipo') ? ' is-invalid' : ''), 'placeholder' => 'foto_equipo']) }}
            {!! $errors->first('foto_equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fotografía del Compresor') }}
            {{ Form::data('foto_compresor', $equipo->foto_compresor, ['class' => 'form-control' . ($errors->has('foto_compresor') ? ' is-invalid' : ''), 'placeholder' => 'foto_compresor']) }}
            {!! $errors->first('foto_compresor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo del Compresor') }}
            {{ Form::text('modelo_compresor', $equipo->modelo_compresor, ['class' => 'form-control' . ($errors->has('modelo_compresor') ? ' is-invalid' : ''), 'placeholder' => 'modelo_compresor']) }}
            {!! $errors->first('modelo_compresor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serie del Compresor') }}
            {{ Form::text('serie_compresor', $equipo->serie_compresor, ['class' => 'form-control' . ($errors->has('serie_compresor') ? ' is-invalid' : ''), 'placeholder' => 'serie_compresor']) }}
            {!! $errors->first('serie_compresor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Justificación del Ingreso al Taller') }}
            {{ Form::text('justifi_ingreso', $equipo->justifi_ingreso, ['class' => 'form-control' . ($errors->has('justifi_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'justifi_ingreso']) }}
            {!! $errors->first('justifi_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Ingreso al Taller') }}
            {{ Form::date('fecha_ingreso', $equipo->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'fecha_ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Firmas de Autorización de Salida') }}
            {{ Form::data('foto_firmas_salida', $equipo->foto_firmas_salida, ['class' => 'form-control' . ($errors->has('foto_firmas_salida') ? ' is-invalid' : ''), 'placeholder' => 'foto_firmas_salida']) }}
            {!! $errors->first('foto_firmas_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Salida Oficial del INTECAP') }}
            {{ Form::date('fecha_salida', $equipo->fecha_salida, ['class' => 'form-control' . ($errors->has('fecha_salida') ? ' is-invalid' : ''), 'placeholder' => 'fecha_salida']) }}
            {!! $errors->first('fecha_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
