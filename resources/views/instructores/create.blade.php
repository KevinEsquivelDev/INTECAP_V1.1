@extends('layouts.app')

@section('template_title')
    Crear instructor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card bg-light border-primary ">
                    @includeif('partials.errors')

                    <div class="card card-default">

                        <div class="card-header text-center text-white bg-primary"> <i class="fas fa-user-graduate"></i> Crear instructor</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('instructores.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf
                                @livewire('instructores-component')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
