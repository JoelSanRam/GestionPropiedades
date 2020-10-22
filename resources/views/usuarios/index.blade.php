@extends('MasterPage.admin')

@section('admin')

@if (Auth::user()->rol == "Administrador")
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="{{ route('usuarios.create') }}"><button class="btn btn-primary">Agregar nuevo usuario</button></a></li>
</ol>
<!-- end breadcrumb -->
@endif

<!-- begin page-header -->
<h1 class="page-header">Listado de Usuarios </h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
    <!-- begin col-10 -->
    <div class="col-lg-12">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Listado de usurios</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <table id="data-table-responsive" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-nowrap">Nombre</th>
                            <th width="15%" class="text-nowrap">Nombre de Usuario</th>
                            <th width="15%" class="text-nowrap">Tipo de usuario</th>
                            <th width="10%">Acciones</th>
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
                                    <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-grey btn-icon btn-sm" title="Editar">
                                            <i class="fas fa-pencil-alt fa-fw"></i>
                                    </a>

                                    <a href="{{ route('view-password', $user->id) }}" class="btn btn-warning btn-icon btn-sm" title="Cambiar Contraseña">
                                        <i class="fas fa-key"></i>
                                    </a>
                                    <form action="{{ route('usuarios.destroy', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
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
@endsection
