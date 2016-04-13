<?php
/* @var $this CatCatMatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Cat Mats',
);

$this->menu=array(
	array('label'=>'Create CatCatMat', 'url'=>array('create')),
	array('label'=>'Manage CatCatMat', 'url'=>array('admin')),
);
?>

<h1>Cat Cat Mats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
