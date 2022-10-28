@extends('layouts.app')

@section('template_title')
    {{ $marca->marca ?? 'Mostrar Marca' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card bg-light border-primary ">
                    <div class="card-header text-center text-white bg-primary">
                        <div class="float-left">
                            <span class="card-title"><i class="fas fa-info"></i>  Información de la marca</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id_marca:</strong>
                            {{ $marca->id_marca }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $marca->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $marca->descripcion }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary mt-2" href="{{ route('marcas.index') }}"> <i class="fas fa-arrow-alt-circle-left"></i> Atras</a>
                            <a class="btn btn-success col mt-2 " onclick="javascript:window.print()"><i class="fas fa-cloud-download-alt"> </i> Exportar PDF </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
