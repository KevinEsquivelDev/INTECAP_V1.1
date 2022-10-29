@extends('layouts.app')

@section('template_title')
    {{ $equipo->correlativo ?? 'Mostrar equipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card bg-light border-primary ">
                    <div class="card-header text-center text-white bg-primary">
                        <div class="float-left">
                            <span class="card-title"><i class="fas fa-info"></i>  Información del equipo</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Correlativo:</strong>
                            {{ $equipo->correlativo }}
                        </div>
                        <div class="form-group">
                            <strong>Año de operación:</strong>
                            {{ $equipo->anio_operacion }}
                        </div>
                        <div class="form-group">
                            <strong>Evento de formación:</strong>
                            {{ $equipo->id_evento->programa }}
                        </div>
                        <div class="form-group">
                            <strong>Instructor a cargo:</strong>
                            {{ $equipo->id_inst->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Participante responsable:</strong>
                            {{ $equipo->id_part->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $equipo->id_cliente->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de equipo:</strong>
                            {{ $equipo->id_tipo->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca del equipo:</strong>
                            {{ $equipo->id_marca->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $equipo->modelo_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Serie:</strong>
                            {{ $equipo->serie_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $equipo->id_color->color }}
                        </div>
                        <div class="form-group">
                            <strong>Fotografía frontal:</strong>
                            {{ $equipo->foto_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Fotografía del compresor:</strong>
                            {{ $equipo->foto_compresor }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo del compresor:</strong>
                            {{ $equipo->modelo_compresor }}
                        </div>
                        <div class="form-group">
                            <strong>Serie del compresor:</strong>
                            {{ $equipo->serie_compresor }}
                        </div>
                        <div class="form-group">
                            <strong>Justificación del ingreso:</strong>
                            {{ $equipo->justifi_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Ingreso:</strong>
                            {{ $equipo->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Firmas de autorización de salida:</strong>
                            {{ $equipo->foto_firmas_salida }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de salida oficial:</strong>
                            {{ $equipo->fecha_salida }}
                        </div>

                        <div class="float-right">
                            <a class="btn btn-primary mt-2" href="{{ route('2022.index') }}"> <i class="fas fa-arrow-alt-circle-left"></i> Atras</a>
                            <a class="btn btn-success col mt-2 " onclick="javascript:window.print()"><i class="fas fa-cloud-download-alt"> </i> Exportar PDF </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
