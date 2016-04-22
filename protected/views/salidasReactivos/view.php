<?php
/* @var $this SalidasReactivosController */
/* @var $model SalidasReactivos */

$this->breadcrumbs=array(
	'Salidas Reactivoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SalidasReactivos', 'url'=>array('index')),
	array('label'=>'Create SalidasReactivos', 'url'=>array('create')),
	array('label'=>'Update SalidasReactivos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SalidasReactivos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalidasReactivos', 'url'=>array('admin')),
);
?>

<h1>View SalidasReactivos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_sesion',
		'id_material',
		'id_plantel',
		'id_medida',
		'cantidad',
		'user_reg',
		'user_mod',
		'fecha_reg',
		'fecha_mod',
	),
)); ?>
