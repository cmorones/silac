<?php
/* @var $this SessionesEscolarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sessiones Escolars',
);

$this->menu=array(
	array('label'=>'Create SessionesEscolar', 'url'=>array('create')),
	array('label'=>'Manage SessionesEscolar', 'url'=>array('admin')),
);
?>

<h1>Sessiones Escolars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
