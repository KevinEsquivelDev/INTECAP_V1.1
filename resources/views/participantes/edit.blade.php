@extends('layouts.app')

@section('template_title')
    Editar participante
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modificar participante</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('participantes.update', $participante->id_part) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @livewire('participantes-component')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
