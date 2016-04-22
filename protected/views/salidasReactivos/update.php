<?php
/* @var $this SalidasReactivosController */
/* @var $model SalidasReactivos */

$this->breadcrumbs=array(
	'Salidas Reactivoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalidasReactivos', 'url'=>array('index')),
	array('label'=>'Create SalidasReactivos', 'url'=>array('create')),
	array('label'=>'View SalidasReactivos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SalidasReactivos', 'url'=>array('admin')),
);
?>

<h1>Update SalidasReactivos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>