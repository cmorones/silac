<?php
/* @var $this CatTurnoController */
/* @var $model CatTurno */

$this->breadcrumbs=array(
	'Cat Turnos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatTurno', 'url'=>array('index')),
	array('label'=>'Create CatTurno', 'url'=>array('create')),
	array('label'=>'View CatTurno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatTurno', 'url'=>array('admin')),
);
?>

<h1>Update CatTurno <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>