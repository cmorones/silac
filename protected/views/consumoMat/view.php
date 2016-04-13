<?php
/* @var $this ConsumoMatController */
/* @var $model ConsumoMat */

$this->breadcrumbs=array(
	'Consumo Mats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ConsumoMat', 'url'=>array('index')),
	array('label'=>'Create ConsumoMat', 'url'=>array('create')),
	array('label'=>'Update ConsumoMat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ConsumoMat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConsumoMat', 'url'=>array('admin')),
);
?>

<h1>View ConsumoMat #<?php echo $model->id; ?></h1>

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
