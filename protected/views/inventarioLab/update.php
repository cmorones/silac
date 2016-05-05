<?php
/* @var $this InventarioLabController */
/* @var $model InventarioLab */

$this->breadcrumbs=array(
	'Inventario Labs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InventarioLab', 'url'=>array('index')),
	array('label'=>'Create InventarioLab', 'url'=>array('create')),
	array('label'=>'View InventarioLab', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InventarioLab', 'url'=>array('admin')),
);
?>

<h1>Update InventarioLab <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>