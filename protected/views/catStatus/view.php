<?php
/* @var $this CatStatusController */
/* @var $model CatStatus */

$this->breadcrumbs=array(
	'Cat Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatStatus', 'url'=>array('index')),
	array('label'=>'Create CatStatus', 'url'=>array('create')),
	array('label'=>'Update CatStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatStatus', 'url'=>array('admin')),
);
?>

<h1>View CatStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
