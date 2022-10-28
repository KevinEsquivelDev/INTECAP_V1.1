@extends('layouts.app')

@section('template_title')
    Página inicial
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                               <i class="fas fa-user-cog"></i>  {{ __('Instruciones') }}
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>1. Antes de registrar un equipo</h5>
                        <a>Usted debe ingresar previamente en el menú general ubicado en la barra superior, los datos tales como: color, marcas, registros, tipo de equipo, cliente, participante, instructor responsable, eventos de formación.</a>
                        <br>
                        <br>
                        <h6>Si los datos de algunas características ya están guardados no será necesario registrarlo, no se aceptan duplicados.</h6>
                        <br>
                        <h5>2. Para registrar un equipo</h5>
                        <a>Con los datos previos ya registrados puede continuar en el apartado del menú general llamado Registros de equipos, seleccione el año de operación presente y complete el formulario que se solicita.</a>
                        <br>
                        <br>
                        <h5>3. Tome en cuenta</h5>
                        <a>1. Toda vez registrado un equipo usted no podra eliminarlo o modificarlo del registro, por si alguna razón se ha equibocado, deberá generar otro registro</a><br>
                        <a>2. Los cambios permitidos en el registro son: adjuntarle ingreso de materiales y/o firmas de autización de salida</a><br>
                        <a>3. No podrá borrar datos previos registrados cuando estos sean utilizados en los registros</a><br>
                        <a>4. Cualquier error detectado puede comunicarlo al Soporte Técnico</a><br>
                        <br>
                        <center><h4>INTECAP Inspira!!!</h4></center>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
