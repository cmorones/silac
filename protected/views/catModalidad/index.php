<?php
/* @var $this CatModalidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Modalidads',
);

$this->menu=array(
	array('label'=>'Create CatModalidad', 'url'=>array('create')),
	array('label'=>'Manage CatModalidad', 'url'=>array('admin')),
);
?>

<h1>Cat Modalidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
