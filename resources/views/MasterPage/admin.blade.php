<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Managed Tables - Responsive</title>
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

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('assets/plugins/pace/pace.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->

			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<form class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">5</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (5)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-bug media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="{{ asset('assets/img/user/user-1.jpg" class="media-object')}}" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">25 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="{{ asset('assets/img/user/user-2.jpg" class="media-object')}}" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">35 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-plus media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New User Registered</h6>
									<div class="text-muted f-s-11">1 hour ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-envelope media-object bg-silver-darker"></i>
									<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New Email From John</h6>
									<div class="text-muted f-s-11">2 hour ago</div>
								</div>
							</a>
						</li>
						<li class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset('assets/img/user/user-13.jpg')}}" alt="" />
						<span class="d-none d-md-inline">Adam Schwartz</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->

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
								<img src="{{ asset('assets/img/user/user-13.jpg')}}" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								Sean Ngu
								<small>Front end developer</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
                            <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                        </ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-th-large"></i>
						    <span>Dashboard</span>
					    </a>
						<ul class="sub-menu">
						    <li><a href="index.html">Dashboard v1</a></li>
						    <li><a href="index_v2.html">Dashboard v2</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<span class="badge pull-right">10</span>
							<i class="fa fa-hdd"></i>
							<span>Email</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="email_inbox.html">Inbox</a></li>
						    <li><a href="email_compose.html">Compose</a></li>
						    <li><a href="email_detail.html">Detail</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-gem"></i>
						    <span>UI Elements <span class="label label-theme m-l-5">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="ui_general.html">General</a></li>
							<li><a href="ui_typography.html">Typography</a></li>
							<li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
							<li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
							<li><a href="ui_modal_notification.html">Modal & Notification <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							<li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
							<li><a href="ui_media_object.html">Media Object</a></li>
							<li><a href="ui_buttons.html">Buttons</a></li>
							<li><a href="ui_icons.html">Icons</a></li>
							<li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
							<li><a href="ui_ionicons.html">Ionicons</a></li>
							<li><a href="ui_tree.html">Tree View</a></li>
							<li><a href="ui_language_bar_icon.html">Language Bar & Icon</a></li>
							<li><a href="ui_social_buttons.html">Social Buttons</a></li>
							<li><a href="ui_tour.html">Intro JS</a></li>
						</ul>
					</li>
					<li>
						<a href="bootstrap_4.html">
							<div class="icon-img">
						    	<img src="{{ asset('assets/img/logo/logo-bs4.png')}}" alt="" />
						    </div>
						    <span>Bootstrap 4 <span class="label label-theme m-l-5">NEW</span></span>
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-list-ol"></i>
						    <span>Form Stuff <span class="label label-theme m-l-5">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="form_elements.html">Form Elements <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							<li><a href="form_plugins.html">Form Plugins <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							<li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
							<li><a href="form_validation.html">Form Validation</a></li>
							<li><a href="form_wizards.html">Wizards</a></li>
							<li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
							<li><a href="form_wysiwyg.html">WYSIWYG</a></li>
							<li><a href="form_editable.html">X-Editable</a></li>
							<li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
							<li><a href="form_summernote.html">Summernote</a></li>
							<li><a href="form_dropzone.html">Dropzone</a></li>
						</ul>
					</li>
					<li class="has-sub active">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-table"></i>
						    <span>Tables</span>
						</a>
						<ul class="sub-menu">
							<li><a href="table_basic.html">Basic Tables</a></li>
							<li class="has-sub active">
							    <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
							    <ul class="sub-menu">
							        <li><a href="table_manage.html">Default</a></li>
							        <li><a href="table_manage_autofill.html">Autofill</a></li>
							        <li><a href="table_manage_buttons.html">Buttons</a></li>
							        <li><a href="table_manage_colreorder.html">ColReorder</a></li>
							        <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
							        <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
							        <li><a href="table_manage_keytable.html">KeyTable</a></li>
							        <li class="active"><a href="table_manage_responsive.html">Responsive</a></li>
							        <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
							        <li><a href="table_manage_scroller.html">Scroller</a></li>
							        <li><a href="table_manage_select.html">Select</a></li>
							        <li><a href="table_manage_combine.html">Extension Combination</a></li>
							    </ul>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
							<i class="fa fa-star"></i>
							<span>Front End</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="{{ asset('asset/afrontend/template/template_one_page_parallax/index.html')}}" target="_blank">One Page Parallax</a></li>
						    <li><a href="{{ asset('frontend/template/template_blog/index.html')}}" target="_blank">Blog</a></li>
						    <li><a href="{{ asset('frontend/template/template_forum/index.html')}}" target="_blank">Forum</a></li>
						    <li><a href="{{ asset('frontend/template/template_e_commerce/index.html')}}" target="_blank">E-Commerce</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
					        <i class="fa fa-envelope"></i>
					        <span>Email Template</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="email_system.html">System Template</a></li>
							<li><a href="email_newsletter.html">Newsletter Template</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
					        <i class="fa fa-chart-pie"></i>
						    <span>Chart</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="chart-flot.html">Flot Chart</a></li>
						    <li><a href="chart-morris.html">Morris Chart</a></li>
							<li><a href="chart-js.html">Chart JS</a></li>
						    <li><a href="chart-d3.html">d3 Chart</a></li>
						</ul>
					</li>
					<li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
					        <i class="fa fa-map"></i>
					        <span>Map</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="map_vector.html">Vector Map</a></li>
							<li><a href="map_google.html">Google Map</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-image"></i>
						    <span>Gallery</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="gallery.html">Gallery v1</a></li>
					        <li><a href="gallery_v2.html">Gallery v2</a></li>
					    </ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-cogs"></i>
						    <span>Page Options</span>
						</a>
						<ul class="sub-menu">
							<li><a href="page_blank.html">Blank Page</a></li>
							<li><a href="page_with_footer.html">Page with Footer</a></li>
							<li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
							<li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
							<li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
							<li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
							<li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
							<li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
							<li><a href="page_full_height.html">Full Height Content</a></li>
							<li><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
							<li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
							<li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                            <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                            <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                            <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                            <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                            <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-gift"></i>
						    <span>Extra</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="extra_timeline.html">Timeline</a></li>
						    <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
							<li><a href="extra_search_results.html">Search Results</a></li>
							<li><a href="extra_invoice.html">Invoice</a></li>
							<li><a href="extra_404_error.html">404 Error Page</a></li>
							<li><a href="extra_profile.html">Profile Page</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
					        <i class="fa fa-key"></i>
					        <span>Login & Register</span>
					    </a>
					    <ul class="sub-menu">
							<li><a href="login.html">Login</a></li>
					        <li><a href="login_v2.html">Login v2</a></li>
					        <li><a href="login_v3.html">Login v3</a></li>
					        <li><a href="register_v3.html">Register v3</a></li>
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
					        <i class="fa fa-cubes"></i>
					        <span>Version <span class="label label-theme m-l-5">NEW</span></span>
					    </a>
					    <ul class="sub-menu">
							<li><a href="javascript:;">HTML</a></li>
					        <li><a href="{{ asset('template_ajax/index.html')}}">AJAX</a></li>
					        <li><a href="{{ asset('template_angularjs/index.html')}}">ANGULAR JS</a></li>
					        <li><a href="{{ asset('template_angularjs5/index.html')}}">ANGULAR JS 5 <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
					        <li><a href="{{ asset('template_laravel/index.html')}}">LARAVEL <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
					        <li><a href="{{ asset('template_material/index.html')}}">MATERIAL DESIGN</a></li>
					        <li><a href="{{ asset('template_apple/index.html')}}">APPLE DESIGN</a></li>
					        <li><a href="{{ asset('template_transparent/index.html')}}">TRANSPARENT DESIGN <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret"></b>
					        <i class="fa fa-medkit"></i>
					        <span>Helper</span>
					    </a>
					    <ul class="sub-menu">
							<li><a href="helper_css.html">Predefined CSS Classes</a></li>
					    </ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-align-left"></i>
						    <span>Menu Level</span>
						</a>
						<ul class="sub-menu">
							<li class="has-sub">
								<a href="javascript:;">
					        		<b class="caret"></b>
						            Menu 1.1
						        </a>
								<ul class="sub-menu">
									<li class="has-sub">
										<a href="javascript:;">
										    <b class="caret"></b>
										    Menu 2.1
										</a>
										<ul class="sub-menu">
											<li><a href="javascript:;">Menu 3.1</a></li>
											<li><a href="javascript:;">Menu 3.2</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Menu 2.2</a></li>
									<li><a href="javascript:;">Menu 2.3</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Menu 1.2</a></li>
							<li><a href="javascript:;">Menu 1.3</a></li>
						</ul>
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

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a><button class="btn btn-primary">Agregar nuevo predio</button></a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Listado de predios </h1>
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
                            <h4 class="panel-title">Listado de predios</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-responsive" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th width="1%">ID</th>
                                    	<th class="text-nowrap">Propietario</th>
                                        <th width="15%" class="text-nowrap">Status</th>
                                        <th width="15%" class="text-nowrap">Tipo</th>
                                        <th class="text-nowrap">Ubicación</th>
                                        <th width="20%" class="text-nowrap">Ult. mov.</th>
                                        <th width="10%">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                    	<td width="1%" class="f-s-600 text-inverse">1</td>
                                    	<td >Joel Sánchez Ramírez</td>
                                        <td>Vigente</td>
                                        <td>Predio Urbano</td>
                                        <td> <p>Dirección: calle 19 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                                        <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
										<td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
											<button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

											<button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                                    </tr>
									<tr class="odd gradeX">
                                    	<td width="1%" class="f-s-600 text-inverse">1</td>
                                    	<td >Joel Sánchez Ramírez</td>
                                        <td>Vigente</td>
                                        <td>Predio Urbano</td>
                                        <td> <p>Dirección: calle 19 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                                        <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
										<td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
											<button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

											<button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
									</tr>
									<tr class="odd gradeX">
                                    	<td width="1%" class="f-s-600 text-inverse">1</td>
                                    	<td >Joel Sánchez Ramírez</td>
                                        <td>Vigente</td>
                                        <td>Predio Urbano</td>
                                        <td> <p>Dirección: calle 19 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                                        <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
										<td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
											<button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

											<button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
									</tr>
									<tr class="odd gradeX">
                                    	<td width="1%" class="f-s-600 text-inverse">1</td>
                                    	<td >Joel Sánchez Ramírez</td>
                                        <td>Vigente</td>
                                        <td>Predio Urbano</td>
                                        <td> <p>Dirección: calle 19 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                                        <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
										<td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
											<button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

											<button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
									</tr>
									<tr class="odd gradeX">
                                    	<td width="1%" class="f-s-600 text-inverse">1</td>
                                    	<td >Joel Sánchez Ramírez</td>
                                        <td>Vigente</td>
                                        <td>Predio Urbano</td>
                                        <td> <p>Dirección: calle 19 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                                        <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
										<td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
											<button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

											<button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
									</tr>
									<tr class="odd gradeX">
                                    	<td width="1%" class="f-s-600 text-inverse">1</td>
                                    	<td >Joel Sánchez Ramírez</td>
                                        <td>Vigente</td>
                                        <td>Predio Urbano</td>
                                        <td> <p>Dirección: calle 19 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                                        <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
										<td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
											<button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

											<button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
									</tr>
									<tr class="odd gradeX">
                                    	<td width="1%" class="f-s-600 text-inverse">1</td>
                                    	<td >Joel Sánchez Ramírez</td>
                                        <td>Vigente</td>
                                        <td>Predio Urbano</td>
                                        <td> <p>Dirección: calle 19 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                                        <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
										<td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
											<button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

											<button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
									</tr>
									<tr class="odd gradeX">
                                    	<td width="1%" class="f-s-600 text-inverse">1</td>
                                    	<td >Joel Sánchez Ramírez</td>
                                        <td>Vigente</td>
                                        <td>Predio Urbano</td>
                                        <td> <p>Dirección: calle 19 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                                        <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
										<td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
											<button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

											<button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                                    </tr>
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
		</div>
		<!-- end #content -->

        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-theme-file="{{ asset('assets/css/default/theme/default.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="{{ asset('assets/css/default/theme/red.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="{{ asset('assets/css/default/theme/blue.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="{{ asset('assets/css/default/theme/purple.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="{{ asset('assets/css/default/theme/orange.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="{{ asset('assets/css/default/theme/black.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage">Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->

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

	<script>
		$(document).ready(function() {
			App.init();
			TableManageResponsive.init();
		});
	</script>
</body>
</html>
