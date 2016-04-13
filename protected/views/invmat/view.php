<?php
/* @var $this InvmatController */
/* @var $model Invmat */

$this->breadcrumbs=array(
	'Invmats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Invmat', 'url'=>array('index')),
	array('label'=>'Create Invmat', 'url'=>array('create')),
	array('label'=>'Update Invmat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Invmat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Invmat', 'url'=>array('admin')),
);
?>

<h1>View Invmat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_material',
		'id_plantel',
		'id_medida',
		'cantidad',
		'fecha_reg',
		'fecha_mod',
	),
)); ?>
