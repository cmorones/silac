<?php
/* @var $this CatSesionController */
/* @var $model CatSesion */

$this->breadcrumbs=array(
	'Cat Sesions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatSesion', 'url'=>array('index')),
	array('label'=>'Create CatSesion', 'url'=>array('create')),
	array('label'=>'Update CatSesion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatSesion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatSesion', 'url'=>array('admin')),
);
?>

<h1>View CatSesion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
