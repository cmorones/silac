<?php
/* @var $this SalidaMatController */
/* @var $model SalidaMat */

$this->breadcrumbs=array(
	'Salida Mats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SalidaMat', 'url'=>array('index')),
	array('label'=>'Create SalidaMat', 'url'=>array('create')),
	array('label'=>'Update SalidaMat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SalidaMat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalidaMat', 'url'=>array('admin')),
);
?>

<h1>View SalidaMat #<?php echo $model->id; ?></h1>

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
