<?php
/* @var $this CatTurnoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Turnos',
);

$this->menu=array(
	array('label'=>'Create CatTurno', 'url'=>array('create')),
	array('label'=>'Manage CatTurno', 'url'=>array('admin')),
);
?>

<h1>Cat Turnos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
