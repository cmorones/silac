<?php
/* @var $this CatMatController */
/* @var $model CatMat */

$this->breadcrumbs=array(
	'Cat Mats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatMat', 'url'=>array('index')),
	array('label'=>'Create CatMat', 'url'=>array('create')),
	array('label'=>'View CatMat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatMat', 'url'=>array('admin')),
);
?>

<h1>Update CatMat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>