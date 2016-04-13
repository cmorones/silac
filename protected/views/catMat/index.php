<?php
/* @var $this CatMatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Mats',
);

$this->menu=array(
	array('label'=>'Create CatMat', 'url'=>array('create')),
	array('label'=>'Manage CatMat', 'url'=>array('admin')),
);
?>

<h1>Cat Mats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
