<?php
/* @var $this SalidaMatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salida Mats',
);

$this->menu=array(
	array('label'=>'Create SalidaMat', 'url'=>array('create')),
	array('label'=>'Manage SalidaMat', 'url'=>array('admin')),
);
?>

<h1>Salida Mats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
