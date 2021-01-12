@extends('MasterPage.admin')

@section('admin')

<div class="row mb-3">
    <div class="col-lg-10">
        <h1 class="page-header">Listado de Usuarios </h1>
    </div>
    <div class="col-lg-2">
        @if (Auth::user()->rol == "Administrador")
            <a href="{{ route('usuarios.create') }}" class="btn text-light float-right" style="background: #1C4482;">Nuevo Usuario</a>
        @endif
    </div>
</div>

<!-- begin row -->
<div class="row">
    <!-- begin col-10 -->
    <div class="col-lg-12">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
                <div class="panel-heading-btn">

                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                </div>
                <h4 class="panel-title">Listado de usuarios</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <table id="data-table-responsive" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="20%" class="text-nowrap">Nombre</th>
                            <th width="30%" class="text-nowrap">Nombre de Usuario</th>
                            <th width="20%" class="text-nowrap">Tipo de usuario</th>
                            <th width="30%">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr class="odd gradeX">
                                <td >{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->rol }}</td>
                                <td>
                                    @if (Auth::user()->rol == "Administrador")
                                    <form action="{{ route('usuarios.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-grey btn-icon btn-sm" title="Editar">
                                            <i class="fas fa-pencil-alt fa-fw"></i>
                                        </a>

                                        <a href="{{ route('view-password', $user->id) }}" class="btn text-light btn-icon btn-sm" title="Cambiar Contraseña" style="background: #ffc800;">
                                            <i class="fas fa-key"></i>
                                        </a>

                                        <button class="btn btn-danger btn-icon btn-sm" title="Eliminar">
                                            <i class="fas fa-trash-alt fa-fw"></i>
                                        </button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
<div class="copyright">
    <p>© 2021 Desarrollado por <a href="https://www.buho-solutions.com">Buho solutions</a></p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.active > a').css("background-color", "#1C4482");
    });
</script>

@endsection
