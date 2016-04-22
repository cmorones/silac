<?php
/* @var $this ConsumoReactivosController */
/* @var $model ConsumoReactivos */

$this->breadcrumbs=array(
	'Consumo Reactivoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConsumoReactivos', 'url'=>array('index')),
	array('label'=>'Manage ConsumoReactivos', 'url'=>array('admin')),
);
?>

<h1>Create ConsumoReactivos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>