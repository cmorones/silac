<?php
/* @var $this CatPlantelesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Planteles',
);

$this->menu=array(
	array('label'=>'Create CatPlanteles', 'url'=>array('create')),
	array('label'=>'Manage CatPlanteles', 'url'=>array('admin')),
);
?>

<h1>Cat Planteles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
