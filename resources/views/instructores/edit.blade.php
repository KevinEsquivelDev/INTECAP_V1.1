@extends('layouts.app')

@section('template_title')
    Editar instructor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modificar instructor</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('instructores.update', $instructor->id_inst) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @livewire('instructores-component')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
