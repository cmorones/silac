<?php
/* @var $this CatCatMatController */
/* @var $model CatCatMat */

$this->breadcrumbs=array(
	'Cat Cat Mats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatCatMat', 'url'=>array('index')),
	array('label'=>'Create CatCatMat', 'url'=>array('create')),
	array('label'=>'View CatCatMat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatCatMat', 'url'=>array('admin')),
);
?>

<h1>Update CatCatMat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>