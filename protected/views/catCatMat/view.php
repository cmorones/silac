<?php
/* @var $this CatCatMatController */
/* @var $model CatCatMat */

$this->breadcrumbs=array(
	'Cat Cat Mats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatCatMat', 'url'=>array('index')),
	array('label'=>'Create CatCatMat', 'url'=>array('create')),
	array('label'=>'Update CatCatMat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatCatMat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatCatMat', 'url'=>array('admin')),
);
?>

<h1>View CatCatMat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
