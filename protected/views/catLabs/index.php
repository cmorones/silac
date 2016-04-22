<?php
/* @var $this CatLabsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Labs',
);

$this->menu=array(
	array('label'=>'Create CatLabs', 'url'=>array('create')),
	array('label'=>'Manage CatLabs', 'url'=>array('admin')),
);
?>

<h1>Cat Labs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
