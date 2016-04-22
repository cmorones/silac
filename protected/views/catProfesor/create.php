<?php
/* @var $this CatProfesorController */
/* @var $model CatProfesor */

$this->breadcrumbs=array(
	'Cat Profesors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatProfesor', 'url'=>array('index')),
	array('label'=>'Manage CatProfesor', 'url'=>array('admin')),
);
?>

<h1>Create CatProfesor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>