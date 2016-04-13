<?php
/* @var $this CatMedidaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Medidas',
);

$this->menu=array(
	array('label'=>'Create CatMedida', 'url'=>array('create')),
	array('label'=>'Manage CatMedida', 'url'=>array('admin')),
);
?>

<h1>Cat Medidas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
