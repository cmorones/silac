<?php
/* @var $this CatMatReactController */
/* @var $model CatMatReact */

$this->breadcrumbs=array(
	'Cat Mat Reacts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatMatReact', 'url'=>array('index')),
	array('label'=>'Create CatMatReact', 'url'=>array('create')),
	array('label'=>'View CatMatReact', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatMatReact', 'url'=>array('admin')),
);
?>

<h1>Update CatMatReact <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>