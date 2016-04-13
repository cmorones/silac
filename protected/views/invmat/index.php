<?php
/* @var $this InvmatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invmats',
);

$this->menu=array(
	array('label'=>'Create Invmat', 'url'=>array('create')),
	array('label'=>'Manage Invmat', 'url'=>array('admin')),
);
?>

<h1>Invmats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
