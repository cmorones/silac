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
<h4 class="page-header">Invetario de Materiales y Equipos</h4>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'invmat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_material',
		'id_plantel',
		'id_medida',
		'cantidad',
		'fecha_reg',
		/*
		'fecha_mod',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>
</div>
</div>
