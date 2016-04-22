<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SILAC</title>
		<meta name="description" content="description">
		<meta name="author" content="IEMS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->

		  <?php
        error_reporting(0);
        $baseUrl = Yii::app()->request->baseUrl; 
        $cs = Yii::app()->getClientScript();
        //Yii::app()->clientScript->registerCoreScript('jquery');
        $cs->registerCssFile($baseUrl.'/plugins/bootstrap/bootstrap.css');
        $cs->registerCssFile($baseUrl.'/plugins/jquery-ui/jquery-ui.min.css');
        $cs->registerCssFile($baseUrl.'/plugins/jquery-ui/jquery-ui.min.css');
        $cs->registerCssFile($baseUrl.'/plugins/fancybox/jquery.fancybox.css');
        $cs->registerCssFile($baseUrl.'/plugins/fullcalendar/fullcalendar.css');
        $cs->registerCssFile($baseUrl.'/plugins/select2/select2.css');
        $cs->registerCssFile($baseUrl.'/plugins/xcharts/xcharts.css');
        $cs->registerCssFile($baseUrl.'/plugins/justified-gallery/justifiedGallery.css');
        $cs->registerCssFile($baseUrl.'/css/style_v2.css');
        $cs->registerCssFile($baseUrl.'/plugins/chartist/chartist.min.css');
        
       ?>
	</head>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="index.html">IEMS</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<span class='badge'>Sistema Institucional de laboratorios</span>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Bienvenido,</span>
										<span>Administrador</span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<!--<li>
										<a href="#">
											<i class="fa fa-user"></i>
											<span>Profile</span>
										</a>
									</li>
									<li>
										<a href="ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span>Messages</span>
										</a>
									</li>
									<li>
										<a href="ajax/gallery_simple.html" class="ajax-link">
											<i class="fa fa-picture-o"></i>
											<span>Albums</span>
										</a>
									</li>
									<li>
										<a href="ajax/calendar.html" class="ajax-link">
											<i class="fa fa-tasks"></i>
											<span>Tasks</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-cog"></i>
											<span>Settings</span>
										</a>
									</li>-->
									<li>
										<a href="<?php echo CController::createUrl('site/logout'); ?>">
											<i class="fa fa-power-off"></i>
											<span>Salir</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="<?php echo CController::createUrl('main/index'); ?>" >
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Dashboard</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Solicitudes Docente</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo CController::createUrl('catPeriodos/index'); ?>">Apartar Sesiones</a></li>
						<li><a href="<?php echo CController::createUrl('sesiones/mostrar'); ?>">Mostrar Sesiones</a></li>
					
						
						
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Sesiones Laboratorista</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo CController::createUrl('sesiones/validar'); ?>">Validar Sesiones</a></li>
						<li><a href="<?php echo CController::createUrl('sesiones/cierre'); ?>">Cerrar Sesiones</a></li>
						
						
						
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Salidas Inventario</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo CController::createUrl('invmat/admin'); ?>">Salidas Inventario de Materiales</a></li>
						<li><a href="<?php echo CController::createUrl('invReact/admin'); ?>">Salidas Inventario de Reactivos</a></li>
						
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Inventario</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo CController::createUrl('invmat/admin'); ?>">Inventario de Materiales</a></li>
						<li><a href="<?php echo CController::createUrl('invReact/admin'); ?>">Inventario de Reactivos</a></li>
						
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">Administración</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo CController::createUrl('catPlanteles/admin'); ?>">Catalogo de Planteles</a></li>
						<li><a href="<?php echo CController::createUrl('catMat/admin'); ?>">Catalogo de Materiales</a></li>
						<li><a href="<?php echo CController::createUrl('catReact/admin'); ?>">Catalogo de Reactivos</a></li>
						<li><a href="<?php echo CController::createUrl('catCatMat/admin'); ?>">Categorias Materiales</a></li>
						<li><a href="<?php echo CController::createUrl('catMedida/admin'); ?>">Unidades de Medida</a></li>
						
					</ul>
				</li>
				 <li>
					<a  href="<?php echo CController::createUrl('main/calendario'); ?>">
						 <i class="fa fa-calendar"></i>
						 <span class="hidden-xs">Calendario</span>
					</a>
				 </li>
				 <li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">Solicitudes</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="ajax/page_login.html">Solicitud de Sesión</a></li>
						<li><a href="ajax/page_register.html">Solicitud de Materiales</a></li>
						<li><a id="locked-screen" class="submenu" href="ajax/page_locked.html">Solicitud de Tutoriales</a></li>
						
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Informes</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo CController::createUrl('main/xcharts');?>">xCharts</a></li>
						<!--<li><a href="ajax/charts_flot.html">Flot Charts</a></li>
						<li><a href="ajax/charts_google.html">Google Charts</a></li>
						<li><a href="ajax/charts_morris.html">Morris Charts</a></li>
						<li><a href="ajax/charts_amcharts.html">AmCharts</a></li>
						<li><a href="ajax/charts_chartist.html">Chartist</a></li>
						<li><a href="ajax/charts_coindesk.html">CoinDesk realtime</a></li> -->
					</ul>
				</li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Charts</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/charts_xcharts.html">xCharts</a></li>
						<li><a class="ajax-link" href="ajax/charts_flot.html">Flot Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_google.html">Google Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Morris Charts</a></li>
						<li><a class="ajax-link" href="ajax/charts_amcharts.html">AmCharts</a></li>
						<li><a class="ajax-link" href="ajax/charts_chartist.html">Chartist</a></li>
						<li><a class="ajax-link" href="ajax/charts_coindesk.html">CoinDesk realtime</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Tables</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/tables_simple.html">Simple Tables</a></li>
						<li><a class="ajax-link" href="ajax/tables_datatables.html">Data Tables</a></li>
						<li><a class="ajax-link" href="ajax/tables_beauty.html">Beauty Tables</a></li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-desktop"></i>
						 <span class="hidden-xs">UI Elements</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/ui_grid.html">Grid</a></li>
						<li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>
						<li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>
						<li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Jquery UI</a></li>
						<li><a class="ajax-link" href="ajax/ui_icons.html">Icons</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">Pages</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="ajax/page_login.html">Login</a></li>
						<li><a href="ajax/page_register.html">Register</a></li>
						<li><a id="locked-screen" class="submenu" href="ajax/page_locked.html">Locked Screen</a></li>
						<li><a class="ajax-link" href="ajax/page_contacts.html">Contacts</a></li>
						<li><a class="ajax-link" href="ajax/page_feed.html">Feed</a></li>
						<li><a class="ajax-link add-full" href="ajax/page_messages.html">Messages</a></li>
						<li><a class="ajax-link" href="ajax/page_pricing.html">Pricing</a></li>
						<li><a class="ajax-link" href="ajax/page_product.html">Product</a></li>
						<li><a class="ajax-link" href="ajax/page_invoice.html">Invoice</a></li>
						<li><a class="ajax-link" href="ajax/page_search.html">Search Results</a></li>
						<li><a class="ajax-link" href="ajax/page_404.html">Error 404</a></li>
						<li><a href="ajax/page_500.html">Error 500</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-map-marker"></i>
						<span class="hidden-xs">Maps</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/maps.html">OpenStreetMap</a></li>
						<li><a class="ajax-link" href="ajax/map_fullscreen.html">Fullscreen map</a></li>
						<li><a class="ajax-link" href="ajax/map_leaflet.html">Leaflet</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">Gallery</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/gallery_simple.html">Simple Gallery</a></li>
						<li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>
					</ul>
				</li>
				<li>
					 <a class="ajax-link" href="ajax/typography.html">
						 <i class="fa fa-font"></i>
						 <span class="hidden-xs">Typography</span>
					</a>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">Multilevel menu</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">First level menu</a></li>
						<li><a href="#">First level menu</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">
								<i class="fa fa-plus-square"></i>
								<span class="hidden-xs">Second level menu group</span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Second level menu</a></li>
								<li><a href="#">Second level menu</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle">
										<i class="fa fa-plus-square"></i>
										<span class="hidden-xs">Three level menu group</span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Three level menu</a></li>
										<li><a href="#">Three level menu</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle">
												<i class="fa fa-plus-square"></i>
												<span class="hidden-xs">Four level menu group</span>
											</a>
											<ul class="dropdown-menu">
												<li><a href="#">Four level menu</a></li>
												<li><a href="#">Four level menu</a></li>
												<li class="dropdown">
													<a href="#" class="dropdown-toggle">
														<i class="fa fa-plus-square"></i>
														<span class="hidden-xs">Five level menu group</span>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#">Five level menu</a></li>
														<li><a href="#">Five level menu</a></li>
														<li class="dropdown">
															<a href="#" class="dropdown-toggle">
																<i class="fa fa-plus-square"></i>
																<span class="hidden-xs">Six level menu group</span>
															</a>
															<ul class="dropdown-menu">
																<li><a href="#">Six level menu</a></li>
																<li><a href="#">Six level menu</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="#">Three level menu</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>-->
			</ul>
		</div>
		<!--Start Content-->
		<?php echo $content; ?> 
		<!--End Content-->
	</div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php
$cs->registerScriptFile($baseUrl.'/plugins/jquery/jquery.min.js');
$cs->registerScriptFile($baseUrl.'/plugins/jquery-ui/jquery-ui.min.js');
$cs->registerScriptFile($baseUrl.'/plugins/bootstrap/bootstrap.min.js');
$cs->registerScriptFile($baseUrl.'/plugins/justified-gallery/jquery.justifiedGallery.min.js');
$cs->registerScriptFile($baseUrl.'/plugins/tinymce/tinymce.min.js');
$cs->registerScriptFile($baseUrl.'/plugins/xcharts/xcharts.js');
$cs->registerScriptFile($baseUrl.'/js/devoops.js');
$cs->registerScriptFile($baseUrl.'/js/lib/moment.min.js');
$cs->registerScriptFile($baseUrl.'/js/lib/jquery.min.js');
$cs->registerScriptFile($baseUrl.'/js/fullcalendar.min.js');
 $cs->registerScriptFile($baseUrl.'/js/lang/es.js');

?>
</body>
</html>