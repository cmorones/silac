<?php
/* @var $this CatReactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Reacts',
);

$this->menu=array(
	array('label'=>'Create CatReact', 'url'=>array('create')),
	array('label'=>'Manage CatReact', 'url'=>array('admin')),
);
?>

<h1>Cat Reacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
