<?php
/* @var $this CatSesionController */
/* @var $model CatSesion */

$this->breadcrumbs=array(
	'Cat Sesions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatSesion', 'url'=>array('index')),
	array('label'=>'Create CatSesion', 'url'=>array('create')),
	array('label'=>'View CatSesion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatSesion', 'url'=>array('admin')),
);
?>

<h1>Update CatSesion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>