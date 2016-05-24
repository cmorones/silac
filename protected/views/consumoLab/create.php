<?php
/* @var $this ConsumoLabController */
/* @var $model ConsumoLab */

$this->breadcrumbs=array(
	'Consumo Labs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConsumoLab', 'url'=>array('index')),
	array('label'=>'Manage ConsumoLab', 'url'=>array('admin')),
);
?>

<h1>Create ConsumoLab</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>