<?php
/* @var $this ConsumoReactivosController */
/* @var $model ConsumoReactivos */

$this->breadcrumbs=array(
	'Consumo Reactivoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ConsumoReactivos', 'url'=>array('index')),
	array('label'=>'Create ConsumoReactivos', 'url'=>array('create')),
	array('label'=>'Update ConsumoReactivos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ConsumoReactivos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConsumoReactivos', 'url'=>array('admin')),
);
?>

<h1>View ConsumoReactivos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_material',
		'id_plantel',
		'id_sesion',
		'id_materia',
		'cantidad',
		'fecha_reg',
		'fecha_mod',
	),
)); ?>
