<?php
/* @var $this CatMatController */
/* @var $model CatMat */

$this->breadcrumbs=array(
	'Cat Mats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatMat', 'url'=>array('index')),
	array('label'=>'Manage CatMat', 'url'=>array('admin')),
);
?>

<h1>Create CatMat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>