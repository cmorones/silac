<?php
/* @var $this CatProfesorController */
/* @var $model CatProfesor */

$this->breadcrumbs=array(
	'Cat Profesors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatProfesor', 'url'=>array('index')),
	array('label'=>'Create CatProfesor', 'url'=>array('create')),
	array('label'=>'Update CatProfesor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatProfesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatProfesor', 'url'=>array('admin')),
);
?>

<h1>View CatProfesor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_periodo',
		'nombre',
	),
)); ?>
