<?php
/* @var $this CatPeriodosController */
/* @var $model CatPeriodos */

$this->breadcrumbs=array(
	'Cat Periodoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatPeriodos', 'url'=>array('index')),
	array('label'=>'Create CatPeriodos', 'url'=>array('create')),
	array('label'=>'View CatPeriodos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatPeriodos', 'url'=>array('admin')),
);
?>

<h1>Update CatPeriodos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>