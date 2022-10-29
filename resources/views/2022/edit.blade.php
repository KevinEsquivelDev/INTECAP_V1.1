@extends('layouts.app')

@section('template_title')
    Editar registro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modificar registro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('2022.update', $equipo->correlativo) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @livewire('equipos-component')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
