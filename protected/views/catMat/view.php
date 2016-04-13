<?php
/* @var $this CatMatController */
/* @var $model CatMat */

$this->breadcrumbs=array(
	'Cat Mats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatMat', 'url'=>array('index')),
	array('label'=>'Create CatMat', 'url'=>array('create')),
	array('label'=>'Update CatMat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatMat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatMat', 'url'=>array('admin')),
);
?>

<h1>View CatMat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'categoria',
		'tipo',
		'clave',
		'nombre',
		'unidad',
		'status',
	),
)); ?>
