<?php
/* @var $this InventarioLabController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventario Labs',
);

$this->menu=array(
	array('label'=>'Create InventarioLab', 'url'=>array('create')),
	array('label'=>'Manage InventarioLab', 'url'=>array('admin')),
);
?>

<h1>Inventario Labs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
