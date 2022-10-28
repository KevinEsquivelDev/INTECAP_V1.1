@extends('layouts.app')

@section('template_title')
    Editar marca
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modificar marca</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('marcas.update', $color->id_color) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @livewire('marcas-component')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
