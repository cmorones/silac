<?php
/* @var $this CatStatusController */
/* @var $model CatStatus */

$this->breadcrumbs=array(
	'Cat Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatStatus', 'url'=>array('index')),
	array('label'=>'Manage CatStatus', 'url'=>array('admin')),
);
?>

<h1>Create CatStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>