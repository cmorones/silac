<?php
/* @var $this ConsumoMatController */
/* @var $model ConsumoMat */

$this->breadcrumbs=array(
	'Consumo Mats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConsumoMat', 'url'=>array('index')),
	array('label'=>'Manage ConsumoMat', 'url'=>array('admin')),
);
?>

<h1>Create ConsumoMat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>