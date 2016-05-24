<?php
/* @var $this ConsumoLabController */
/* @var $model ConsumoLab */

$this->breadcrumbs=array(
	'Consumo Labs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConsumoLab', 'url'=>array('index')),
	array('label'=>'Create ConsumoLab', 'url'=>array('create')),
	array('label'=>'View ConsumoLab', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ConsumoLab', 'url'=>array('admin')),
);
?>

<h1>Update ConsumoLab <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>