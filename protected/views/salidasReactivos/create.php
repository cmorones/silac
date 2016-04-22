<?php
/* @var $this SalidasReactivosController */
/* @var $model SalidasReactivos */

$this->breadcrumbs=array(
	'Salidas Reactivoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalidasReactivos', 'url'=>array('index')),
	array('label'=>'Manage SalidasReactivos', 'url'=>array('admin')),
);
?>

<h1>Create SalidasReactivos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>