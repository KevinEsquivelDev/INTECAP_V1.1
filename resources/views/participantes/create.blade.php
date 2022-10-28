@extends('layouts.app')

@section('template_title')
    Crear participante
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card bg-light border-primary ">
                    @includeif('partials.errors')

                    <div class="card card-default">

                        <div class="card-header text-center text-white bg-primary"> <i class="fas fa-user-graduate"></i> Crear participante</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('participantes.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf
                                @livewire('participantes-component')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
