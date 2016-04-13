<?php
/* @var $this CatReactController */
/* @var $model CatReact */

$this->breadcrumbs=array(
	'Cat Reacts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatReact', 'url'=>array('index')),
	array('label'=>'Create CatReact', 'url'=>array('create')),
	array('label'=>'View CatReact', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatReact', 'url'=>array('admin')),
);
?>

<h1>Update CatReact <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>