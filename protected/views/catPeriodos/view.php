<?php
/* @var $this CatPeriodosController */
/* @var $model CatPeriodos */

$this->breadcrumbs=array(
	'Cat Periodoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatPeriodos', 'url'=>array('index')),
	array('label'=>'Create CatPeriodos', 'url'=>array('create')),
	array('label'=>'Update CatPeriodos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatPeriodos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatPeriodos', 'url'=>array('admin')),
);
?>

<h1>View CatPeriodos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_year',
		'nombre',
		'secuencia',
		'status',
	),
)); ?>
