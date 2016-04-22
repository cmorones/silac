<?php
/* @var $this CatStatusController */
/* @var $model CatStatus */

$this->breadcrumbs=array(
	'Cat Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatStatus', 'url'=>array('index')),
	array('label'=>'Create CatStatus', 'url'=>array('create')),
	array('label'=>'View CatStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatStatus', 'url'=>array('admin')),
);
?>

<h1>Update CatStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>