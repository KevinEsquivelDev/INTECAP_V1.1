@extends('layouts.app')

@section('template_title')
    Eventos
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                              <i class="fas fa-user-graduate"></i>  {{ __('eventos') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('eventos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>  {{ __('Agregar evento') }}
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
                                    <th>Año de operación</th>
                                    <th>Programa</th>
                                    <th>Días y Horario</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($eventos as $evento)
                                    <tr>
                                        <td>{{ $evento->id_evento }}</td>
                                        <td>{{ $evento->anio}}</td>
                                        <td>{{ $evento->programa}}</td>
                                        <td>{{ $evento->dias_horario}}</td>
                                        <td>
                                            <form action="{{ route('eventos.destroy',$evento->id_evento) }}" id="{{$evento->id_evento}}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('eventos.show',$evento->id_evento) }}"><i class="fa fa-fw fa-eye"></i> info</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('eventos.edit',$evento->id_evento) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="eliminarCatalogo({{$evento->id_evento}})" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $eventos->links() !!}
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
                title: 'Estas seguro de eliminar el evento?',
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
                        'El registro del evento desapareció.',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
