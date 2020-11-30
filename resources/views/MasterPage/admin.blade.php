<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Listado de predios</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet')}}" />
	<link href="{{ asset('assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/animate/animate.min.css" rel="stylesheet')}}" />
	<link href="{{ asset('assets/css/default/style.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/css/default/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/css/default/theme/default.css')}}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css')}}" rel="stylesheet" />

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('assets/plugins/pace/pace.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<link href="{{ asset('css/map.css') }}" rel="stylesheet">
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade"><span class="spinner"></span></div>
	<!-- end #page-loader -->

		<!-- begin #page-container -->
		<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">

		@auth
			<!-- begin #header -->
			<div id="header" class="header navbar-default">
				<!-- begin navbar-header -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Gestión de </b>Propiedades</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end navbar-header -->

				<!-- begin header-nav -->
				<ul class="navbar-nav navbar-right">


					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">

							<span class="d-none d-md-inline">{{ Auth::user()->name }}</span> <b class="caret"></b>
						</a>
						<div class="dropdown-menu dropdown-menu-right">

							<a class="dropdown-item" href="{{ route('logout') }}" 
							onclick="event.preventDefault();	document.getElementById('logout-form').submit();">
                                Salir
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

						</div>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end #header -->
		@endauth

		@auth

			<!-- begin #sidebar -->
			<div id="sidebar" class="sidebar">
				<!-- begin sidebar scrollbar -->
				<div data-scrollbar="true" data-height="100%">
					<!-- begin sidebar user -->
					<ul class="nav">
						<li class="nav-profile">
							<a href="javascript:;" data-toggle="nav-profile">
								<div class="cover with-shadow"></div>
								<div class="image">
									{{-- <img src="{{ asset('assets/img/user/user-13.jpg')}}" alt="" /> --}}
								</div>
								<div class="info">

									{{ Auth::user()->name }}
									<small>Rol de {{Auth::user()->rol}}</small>
								</div>
							</a>
						</li>

					</ul>
					<!-- end sidebar user -->
					<!-- begin sidebar nav -->
					<ul class="nav">
						<li class="nav-header">Módulos</li>

						<li class="has-sub">
							<a href="{{ route('map') }}">

								<i class="fa fa-map"></i>
								<span>Mapa</span>
							</a>

	                    </li>
	                    <li class="has-sub">
							<a href="{{ route('listado') }}">
								<i class="fa fa-home"></i>
								<span>Listado de predios</span>
							</a>
	                    </li>

	                    @if (Auth::user()->rol == "Administrador")
		                    <li class="has-sub">
								<a href="{{ route('view-upload') }}">
									<i class="fa fa-file-excel"></i>
									<span>Cargar Excel</span>
								</a>
		                    </li>
		                    <li class="has-sub">
								<a href="{{ route('create-view-propiedad') }}">
									<i class="fa fa-plus-square"></i>
									<span>Nuevo Predio</span>
								</a>
		                    </li>
		                   
		                    <li class="has-sub">
								<a href="/usuarios">
									<i class="fa fa-user"></i>
									<span>Listado de usuarios</span>
								</a>
		                    </li>
		                 @endif

	                    <li class="has-sub">
							<a href="/reporte">
								<i class="fa fa-edit"></i>
								<span>Generar reporte</span>
							</a>

	                    </li>
	                    <li class="has-sub">

							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-user-times"></i>
								<span>Salir</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

						</li>




				        <!-- begin sidebar minify button -->
						<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
				        <!-- end sidebar minify button -->
					</ul>
					<!-- end sidebar nav -->
				</div>
				<!-- end sidebar scrollbar -->
			</div>
			<div class="sidebar-bg"></div>
			<!-- end #sidebar -->

		@endauth

		<!-- begin #content -->
		<div id="content" class="content">
			@yield('admin')
		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js')}}"></script>
	<!--[if lt IE 9]>
		<script src="{{ asset('assets/crossbrowserjs/html5shiv.js')}}"></script>
		<script src="{{ asset('assets/crossbrowserjs/respond.min.js')}}"></script>
		<script src="{{ asset('assets/crossbrowserjs/excanvas.min.js')}}"></script>
	<![endif]-->
	<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/js-cookie/js.cookie.js')}}"></script>
	<script src="{{ asset('assets/js/theme/default.min.js')}}"></script>
	<script src="{{ asset('assets/js/apps.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
	<script src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('assets/js/demo/table-manage-responsive.demo.min.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script src="{{ asset('assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js') }}"></script>
	<script src="{{ asset('assets/js/demo/form-wizards.demo.min.js') }}"></script>

	<script>
		$(document).ready(function() {
			App.init();
			TableManageResponsive.init();
            FormWizard.init();
		});
	</script>
</body>
</html>
