<?php
/* @var $this SalidasReactivosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salidas Reactivoses',
);

$this->menu=array(
	array('label'=>'Create SalidasReactivos', 'url'=>array('create')),
	array('label'=>'Manage SalidasReactivos', 'url'=>array('admin')),
);
?>

<h1>Salidas Reactivoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
