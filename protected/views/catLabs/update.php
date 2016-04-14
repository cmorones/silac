<?php
/* @var $this CatLabsController */
/* @var $model CatLabs */

$this->breadcrumbs=array(
	'Cat Labs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatLabs', 'url'=>array('index')),
	array('label'=>'Create CatLabs', 'url'=>array('create')),
	array('label'=>'View CatLabs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatLabs', 'url'=>array('admin')),
);
?>

<h1>Update CatLabs <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>