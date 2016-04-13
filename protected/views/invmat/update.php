<?php
/* @var $this InvmatController */
/* @var $model Invmat */

$this->breadcrumbs=array(
	'Invmats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Invmat', 'url'=>array('index')),
	array('label'=>'Create Invmat', 'url'=>array('create')),
	array('label'=>'View Invmat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Invmat', 'url'=>array('admin')),
);
?>

<h1>Update Invmat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>