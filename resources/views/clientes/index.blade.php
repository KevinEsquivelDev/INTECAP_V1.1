@extends('layouts.app')

@section('template_title')
    Participantes
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                              <i class="fas fa-user-graduate"></i>  {{ __('participantes') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('participantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>  {{ __('Agregar participante') }}
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
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Carnet</th>
                                    <th>Teléfono</th>
                                    <th>CUI</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($participantes as $participante)
                                    <tr>
                                        <td>{{ $participante->id_part }}</td>
                                        <td>{{ $participante->nombre}}</td>
                                        <td>{{ $participante->apellidos}}</td>
                                        <td>{{ $participante->carnet}}</td>
                                        <td>{{ $participante->tel_part}}</td>
                                        <td>{{ $participante->cui}}</td>
                                        <td>
                                            <form action="{{ route('participantes.destroy',$participante->id_part) }}" id="{{$participante->id_part}}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('participantes.show',$participante->id_part) }}"><i class="fa fa-fw fa-eye"></i> info</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('participantes.edit',$participante->id_part) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="eliminarCatalogo({{$participante->id_part}})" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $participantes->links() !!}
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
                title: 'Estas seguro de eliminar el participante?',
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
                        'El registro del participante desapareció.',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
