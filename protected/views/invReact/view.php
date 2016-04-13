<?php
/* @var $this InvReactController */
/* @var $model InvReact */

$this->breadcrumbs=array(
	'Inv Reacts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InvReact', 'url'=>array('index')),
	array('label'=>'Create InvReact', 'url'=>array('create')),
	array('label'=>'Update InvReact', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InvReact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvReact', 'url'=>array('admin')),
);
?>

<h1>View InvReact #<?php echo $model->id; ?></h1>

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
