<?php
/* @var $this CatTurnoController */
/* @var $model CatTurno */

$this->breadcrumbs=array(
	'Cat Turnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatTurno', 'url'=>array('index')),
	array('label'=>'Manage CatTurno', 'url'=>array('admin')),
);
?>

<h1>Create CatTurno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>