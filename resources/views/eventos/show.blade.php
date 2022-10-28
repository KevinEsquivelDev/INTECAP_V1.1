@extends('layouts.app')

@section('template_title')
    {{ $evento->programa ?? 'Mostrar evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card bg-light border-primary ">
                    <div class="card-header text-center text-white bg-primary">
                        <div class="float-left">
                            <span class="card-title"><i class="fas fa-info"></i>  Información del evento</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id_evento:</strong>
                            {{ $evento->id_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Año de operación:</strong>
                            {{ $evento->anio }}
                        </div>
                        <div class="form-group">
                            <strong>Programa:</strong>
                            {{ $evento->programa }}
                        </div>
                        <div class="form-group">
                            <strong>Días y Horario:</strong>
                            {{ $evento->dias_horario }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary mt-2" href="{{ route('eventos.index') }}"> <i class="fas fa-arrow-alt-circle-left"></i> Atras</a>
                            <a class="btn btn-success col mt-2 " onclick="javascript:window.print()"><i class="fas fa-cloud-download-alt"> </i> Exportar PDF </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
