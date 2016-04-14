<?php
/* @var $this CatLabsController */
/* @var $model CatLabs */

$this->breadcrumbs=array(
	'Cat Labs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatLabs', 'url'=>array('index')),
	array('label'=>'Manage CatLabs', 'url'=>array('admin')),
);
?>

<h1>Create CatLabs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>