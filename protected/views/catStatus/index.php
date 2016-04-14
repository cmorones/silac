<?php
/* @var $this CatStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Statuses',
);

$this->menu=array(
	array('label'=>'Create CatStatus', 'url'=>array('create')),
	array('label'=>'Manage CatStatus', 'url'=>array('admin')),
);
?>

<h1>Cat Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
