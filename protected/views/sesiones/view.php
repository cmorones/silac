<?php
/* @var $this SesionesController */
/* @var $model Sesiones */

$this->breadcrumbs=array(
	'Sesiones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sesiones', 'url'=>array('index')),
	array('label'=>'Create Sesiones', 'url'=>array('create')),
	array('label'=>'Update Sesiones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sesiones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sesiones', 'url'=>array('admin')),
);
?>

<h1>View Sesiones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_periodo',
		'id_profesor',
		'id_asignatura',
		'id_grupo',
		'id_modalidad',
		'fecha',
		'hora_ini',
		'hora_fin',
		'num_estudiantes',
		'turno',
		'tipo_sesion',
		'actividades',
		'observaciones',
		'status',
		'fecha_reg',
		'fecha_mod',
	),
)); ?>
