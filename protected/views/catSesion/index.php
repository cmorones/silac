<?php
/* @var $this CatSesionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Sesions',
);

$this->menu=array(
	array('label'=>'Create CatSesion', 'url'=>array('create')),
	array('label'=>'Manage CatSesion', 'url'=>array('admin')),
);
?>

<h1>Cat Sesions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
