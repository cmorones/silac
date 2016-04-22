<?php
/* @var $this SessionesEscolarController */
/* @var $model SessionesEscolar */

$this->breadcrumbs=array(
	'Sessiones Escolars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SessionesEscolar', 'url'=>array('index')),
	array('label'=>'Create SessionesEscolar', 'url'=>array('create')),
	array('label'=>'Update SessionesEscolar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SessionesEscolar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SessionesEscolar', 'url'=>array('admin')),
);
?>

<h1>View SessionesEscolar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_periodo',
		'id_plantel',
		'id_profesor',
		'clave',
		'clave_materia',
		'descripcion',
		'sesion_dia',
		'hora_ini',
		'hora_fin',
		'id_grupo',
	),
)); ?>
