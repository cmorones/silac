<?php
/* @var $this SalidaMatController */
/* @var $model SalidaMat */

$this->breadcrumbs=array(
	'Salida Mats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalidaMat', 'url'=>array('index')),
	array('label'=>'Create SalidaMat', 'url'=>array('create')),
	array('label'=>'View SalidaMat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SalidaMat', 'url'=>array('admin')),
);
?>

<h1>Update SalidaMat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>