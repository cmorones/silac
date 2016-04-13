<?php
/* @var $this ConsumoReactivosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consumo Reactivoses',
);

$this->menu=array(
	array('label'=>'Create ConsumoReactivos', 'url'=>array('create')),
	array('label'=>'Manage ConsumoReactivos', 'url'=>array('admin')),
);
?>

<h1>Consumo Reactivoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
