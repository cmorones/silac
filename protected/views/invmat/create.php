<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="<?php echo CController::createUrl('main/index'); ?>">Inicio</a></li>
			<li>Administracion</li>
		</ol>
		<div id="social" class="pull-right">
		
		</div>
	</div>
</div>
<!--End Breadcrumb-->
<div class="row">

	<div class="col-xs-12 col-sm-9">
<div class="box-content">
<h4 class="page-header">Agregar Materiales</h4>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>
</div>

