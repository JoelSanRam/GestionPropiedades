@extends('MasterPage.admin')

@section('admin')

<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">

</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Creación de Usuario</h1>
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

                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                </div>
                <h4 class="panel-title">Usuarios</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <form action="{{ route('usuarios.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nombre</label>
                            <input name="name" type="text" class="form-control m-b-5 @error('name') is-invalid @enderror" placeholder="Nombre" required>
                            @error('name')
                                <p class="text-dark text-center">El nombre es requerido</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nombre de Usuario</label>
                            <input name="email" type="text" class="form-control m-b-5 @error('email') is-invalid @enderror" placeholder="Nombre de usuario" required>
                            @error('email')
                                <p class="text-dark text-center">El nombre del usuario es requerido y debe es unico</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tipo de usuario</label>
                            <select class="form-control @error('rol') is-invalid @enderror" name="rol" required>
                                <option value="">Elegir</option>
                                <option>Administrador</option>
                                <option>Usuario</option>
                            </select>
                            @error('rol')
                                <p class="text-dark text-center">El rol del usuario es requerido</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contraseña</label>
                            <input name="password" min="8" type="password" name="password" class="form-control m-b-5 @error('password') is-invalid @enderror" placeholder="Contraseña" required>
                            @error('password')
                                <p class="text-dark text-center">La contraseña es requerida y debe tener 8 caracteres minimo.</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row justify-content-end">
                        <a href="/usuarios" class="btn btn-secondary btn-lg mr-2">Regresar</a>
                        <button type="submit" class="btn text-light btn-lg" style="background: #ffc800;">Guardar</button>
                    </div>
                </form>


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
@endsection
