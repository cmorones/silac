<?php
/* @var $this CatCatMatController */
/* @var $model CatCatMat */

$this->breadcrumbs=array(
	'Cat Cat Mats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatCatMat', 'url'=>array('index')),
	array('label'=>'Manage CatCatMat', 'url'=>array('admin')),
);
?>

<h1>Create CatCatMat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>