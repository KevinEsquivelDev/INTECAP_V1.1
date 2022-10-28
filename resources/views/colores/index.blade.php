@extends('layouts.app')

@section('template_title')
    Colores
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                              <i class="fas fa-user-graduate"></i>  {{ __('Colores') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('colores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>  {{ __('Agregar color') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>Id</th>
                                    <th>Color</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($colores as $color)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $color->color}}</td>
                                        <td>
                                            <form action="{{ route('colores.destroy',$color->id_color) }}" id="{{$color->id_color}}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('colores.show',$color->id_color) }}"><i class="fa fa-fw fa-eye"></i> info</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('colores.edit',$color->id_color) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="eliminarCatalogo({{$color->id_color}})" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $colores->links() !!}
            </div>
        </div>
    </div>
@endsection

<!--seccion de la alerta-->
@section('alert')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function eliminarCatalogo(User){
            Swal.fire({
                title: 'Estas seguro de eliminar al color?',
                text: "No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(User).submit()
                    Swal.fire(
                        'Eliminado!',
                        'El registro del color desapareció.',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
