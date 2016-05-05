<?php
/* @var $this CatMatReactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Mat Reacts',
);

$this->menu=array(
	array('label'=>'Create CatMatReact', 'url'=>array('create')),
	array('label'=>'Manage CatMatReact', 'url'=>array('admin')),
);
?>

<h1>Cat Mat Reacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
