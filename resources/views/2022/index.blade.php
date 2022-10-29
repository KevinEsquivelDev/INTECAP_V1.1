@extends('layouts.app')

@section('template_title')
    Registro de equipos 2022
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                              <i class="fas fa-user-graduate"></i>  {{ __('Registro 2022') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('2022.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>  {{ __('Agregar registro') }}
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
                                    <th>Correlativo</th>
                                    <th>Año de operación</th>
                                    <th>Fotografía frontal</th>
                                    <th>Participante responsable</th>
                                    <th>Fecha de Ingreso</th>
                                    <th>Fecha de salida</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($r_equipos as $equipo)
                                    <tr>
                                        <td>{{ $equipo->correlativo }}</td>
                                        <td>{{ $equipo->anio_operacion}}</td>
                                        <td>{{ $equipo->foto_equipo}}</td>
                                        <td>{{ $equipo->id_part->nombre}}</td>
                                        <td>{{ $equipo->fecha_ingreso}}</td>
                                        <td>{{ $equipo->fecha_salida}}</td>
                                        <td>
                                            <form action="{{ route('2022.destroy',$equipo->correlativo) }}" id="{{$equipo->correlativo}}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('2022.show',$equipo->correlativo) }}"><i class="fa fa-fw fa-eye"></i> info</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('2022.edit',$equipo->correlativo) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="eliminarCatalogo({{$equipo->correlativo}})" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $equipos->links() !!}
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
                title: 'Estas seguro de eliminar el equipo?',
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
                        'El registro del equipo desapareció.',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
