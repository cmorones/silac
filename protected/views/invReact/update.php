<?php
/* @var $this InvReactController */
/* @var $model InvReact */

$this->breadcrumbs=array(
	'Inv Reacts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InvReact', 'url'=>array('index')),
	array('label'=>'Create InvReact', 'url'=>array('create')),
	array('label'=>'View InvReact', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InvReact', 'url'=>array('admin')),
);
?>

<h1>Update InvReact <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>