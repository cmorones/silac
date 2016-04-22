<?php
/* @var $this CatAsignaturaController */
/* @var $model CatAsignatura */

$this->breadcrumbs=array(
	'Cat Asignaturas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatAsignatura', 'url'=>array('index')),
	array('label'=>'Manage CatAsignatura', 'url'=>array('admin')),
);
?>

<h1>Create CatAsignatura</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>