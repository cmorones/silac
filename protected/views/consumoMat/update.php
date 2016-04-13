<?php
/* @var $this ConsumoMatController */
/* @var $model ConsumoMat */

$this->breadcrumbs=array(
	'Consumo Mats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConsumoMat', 'url'=>array('index')),
	array('label'=>'Create ConsumoMat', 'url'=>array('create')),
	array('label'=>'View ConsumoMat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ConsumoMat', 'url'=>array('admin')),
);
?>

<h1>Update ConsumoMat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>