<?php
/* @var $this CatTurnoController */
/* @var $model CatTurno */

$this->breadcrumbs=array(
	'Cat Turnos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatTurno', 'url'=>array('index')),
	array('label'=>'Create CatTurno', 'url'=>array('create')),
	array('label'=>'Update CatTurno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatTurno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatTurno', 'url'=>array('admin')),
);
?>

<h1>View CatTurno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
