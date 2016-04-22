<?php
/* @var $this CatProfesorController */
/* @var $model CatProfesor */

$this->breadcrumbs=array(
	'Cat Profesors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatProfesor', 'url'=>array('index')),
	array('label'=>'Create CatProfesor', 'url'=>array('create')),
	array('label'=>'View CatProfesor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatProfesor', 'url'=>array('admin')),
);
?>

<h1>Update CatProfesor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>