<?php
/* @var $this CatAsignaturaController */
/* @var $model CatAsignatura */

$this->breadcrumbs=array(
	'Cat Asignaturas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatAsignatura', 'url'=>array('index')),
	array('label'=>'Create CatAsignatura', 'url'=>array('create')),
	array('label'=>'View CatAsignatura', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatAsignatura', 'url'=>array('admin')),
);
?>

<h1>Update CatAsignatura <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>