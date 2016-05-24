<?php
/* @var $this InventarioLabController */
/* @var $model InventarioLab */

$this->breadcrumbs=array(
	'Inventario Labs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InventarioLab', 'url'=>array('index')),
	array('label'=>'Create InventarioLab', 'url'=>array('create')),
	array('label'=>'Update InventarioLab', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InventarioLab', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InventarioLab', 'url'=>array('admin')),
);
?>

<h1>View InventarioLab #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_catmat',
		'id_plantel',
		'entrada',
		'user_reg',
		'user_mod',
		'fecha_reg',
		'fecha_mod',
	),
)); ?>
