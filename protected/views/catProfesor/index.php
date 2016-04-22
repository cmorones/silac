<?php
/* @var $this CatProfesorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Profesors',
);

$this->menu=array(
	array('label'=>'Create CatProfesor', 'url'=>array('create')),
	array('label'=>'Manage CatProfesor', 'url'=>array('admin')),
);
?>

<h1>Cat Profesors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
