<?php
/* @var $this ConsumoReactivosController */
/* @var $model ConsumoReactivos */

$this->breadcrumbs=array(
	'Consumo Reactivoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConsumoReactivos', 'url'=>array('index')),
	array('label'=>'Create ConsumoReactivos', 'url'=>array('create')),
	array('label'=>'View ConsumoReactivos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ConsumoReactivos', 'url'=>array('admin')),
);
?>

<h1>Update ConsumoReactivos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>