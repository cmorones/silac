<?php
/* @var $this CatPeriodosController */
/* @var $model CatPeriodos */

$this->breadcrumbs=array(
	'Cat Periodoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatPeriodos', 'url'=>array('index')),
	array('label'=>'Manage CatPeriodos', 'url'=>array('admin')),
);
?>

<h1>Create CatPeriodos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>