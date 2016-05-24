<?php
/* @var $this ConsumoLabController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consumo Labs',
);

$this->menu=array(
	array('label'=>'Create ConsumoLab', 'url'=>array('create')),
	array('label'=>'Manage ConsumoLab', 'url'=>array('admin')),
);
?>

<h1>Consumo Labs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
