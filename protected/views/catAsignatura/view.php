<?php
/* @var $this CatAsignaturaController */
/* @var $model CatAsignatura */

$this->breadcrumbs=array(
	'Cat Asignaturas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatAsignatura', 'url'=>array('index')),
	array('label'=>'Create CatAsignatura', 'url'=>array('create')),
	array('label'=>'Update CatAsignatura', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatAsignatura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatAsignatura', 'url'=>array('admin')),
);
?>

<h1>View CatAsignatura #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
