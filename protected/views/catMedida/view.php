<?php
/* @var $this CatMedidaController */
/* @var $model CatMedida */

$this->breadcrumbs=array(
	'Cat Medidas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatMedida', 'url'=>array('index')),
	array('label'=>'Create CatMedida', 'url'=>array('create')),
	array('label'=>'Update CatMedida', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatMedida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatMedida', 'url'=>array('admin')),
);
?>

<h1>View CatMedida #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
