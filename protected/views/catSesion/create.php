<?php
/* @var $this CatSesionController */
/* @var $model CatSesion */

$this->breadcrumbs=array(
	'Cat Sesions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatSesion', 'url'=>array('index')),
	array('label'=>'Manage CatSesion', 'url'=>array('admin')),
);
?>

<h1>Create CatSesion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>