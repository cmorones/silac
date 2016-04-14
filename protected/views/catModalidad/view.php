<?php
/* @var $this CatModalidadController */
/* @var $model CatModalidad */

$this->breadcrumbs=array(
	'Cat Modalidads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatModalidad', 'url'=>array('index')),
	array('label'=>'Create CatModalidad', 'url'=>array('create')),
	array('label'=>'Update CatModalidad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatModalidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatModalidad', 'url'=>array('admin')),
);
?>

<h1>View CatModalidad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
