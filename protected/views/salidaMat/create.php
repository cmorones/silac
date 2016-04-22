<?php
/* @var $this SalidaMatController */
/* @var $model SalidaMat */

$this->breadcrumbs=array(
	'Salida Mats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalidaMat', 'url'=>array('index')),
	array('label'=>'Manage SalidaMat', 'url'=>array('admin')),
);
?>

<h1>Create SalidaMat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>