@extends('layouts.app')

@section('template_title')
    {{ $tipo->tipo ?? 'Mostrar tipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card bg-light border-primary ">
                    <div class="card-header text-center text-white bg-primary">
                        <div class="float-left">
                            <span class="card-title"><i class="fas fa-info"></i>  Información del tipo</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id_tipo:</strong>
                            {{ $tipo->id_tipo }}
                        </div>
                        <div class="form-group">
                            <strong>tipo:</strong>
                            {{ $tipo->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $tipo->descripcion }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary mt-2" href="{{ route('tipos.index') }}"> <i class="fas fa-arrow-alt-circle-left"></i> Atras</a>
                            <a class="btn btn-success col mt-2 " onclick="javascript:window.print()"><i class="fas fa-cloud-download-alt"> </i> Exportar PDF </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
