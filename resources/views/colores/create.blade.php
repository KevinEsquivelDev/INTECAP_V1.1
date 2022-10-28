@extends('layouts.app')

@section('template_title')
    Crear Color
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card bg-light border-primary ">
                    @includeif('partials.errors')

                    <div class="card card-default">

                        <div class="card-header text-center text-white bg-primary"> <i class="fas fa-user-graduate"></i> Crear Color</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('colores.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf
                                @livewire('colores-component')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
