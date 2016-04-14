<?php
/* @var $this CatLabsController */
/* @var $model CatLabs */

$this->breadcrumbs=array(
	'Cat Labs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatLabs', 'url'=>array('index')),
	array('label'=>'Create CatLabs', 'url'=>array('create')),
	array('label'=>'Update CatLabs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatLabs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatLabs', 'url'=>array('admin')),
);
?>

<h1>View CatLabs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_plantel',
		'nombre',
	),
)); ?>
