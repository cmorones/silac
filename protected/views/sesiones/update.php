<?php
/* @var $this SesionesController */
/* @var $model Sesiones */

$this->breadcrumbs=array(
	'Sesiones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sesiones', 'url'=>array('index')),
	array('label'=>'Create Sesiones', 'url'=>array('create')),
	array('label'=>'View Sesiones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sesiones', 'url'=>array('admin')),
);
?>

<h1>Update Sesiones <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>