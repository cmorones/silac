<?php
/* @var $this InvReactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inv Reacts',
);

$this->menu=array(
	array('label'=>'Create InvReact', 'url'=>array('create')),
	array('label'=>'Manage InvReact', 'url'=>array('admin')),
);
?>

<h1>Inv Reacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
