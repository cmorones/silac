<?php
/* @var $this CatAsignaturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Asignaturas',
);

$this->menu=array(
	array('label'=>'Create CatAsignatura', 'url'=>array('create')),
	array('label'=>'Manage CatAsignatura', 'url'=>array('admin')),
);
?>

<h1>Cat Asignaturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
