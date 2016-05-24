<?php
/* @var $this ConsumoLabController */
/* @var $model ConsumoLab */

$this->breadcrumbs=array(
	'Consumo Labs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ConsumoLab', 'url'=>array('index')),
	array('label'=>'Create ConsumoLab', 'url'=>array('create')),
	array('label'=>'Update ConsumoLab', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ConsumoLab', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConsumoLab', 'url'=>array('admin')),
);
?>

<h1>View ConsumoLab #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_material',
		'id_plantel',
		'id_sesion',
		'id_materia',
		'cantidad',
		'estado',
		'fecha_reg',
		'fecha_mod',
		'user_reg',
		'user_mod',
	),
)); ?>
