<?php
/* @var $this CatPeriodosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Periodoses',
);

$this->menu=array(
	array('label'=>'Create CatPeriodos', 'url'=>array('create')),
	array('label'=>'Manage CatPeriodos', 'url'=>array('admin')),
);
?>

<h1>Cat Periodoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
