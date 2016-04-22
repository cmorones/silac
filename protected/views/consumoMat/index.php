<?php
/* @var $this ConsumoMatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consumo Mats',
);

$this->menu=array(
	array('label'=>'Create ConsumoMat', 'url'=>array('create')),
	array('label'=>'Manage ConsumoMat', 'url'=>array('admin')),
);
?>

<h1>Consumo Mats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
