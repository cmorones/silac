<?php
/* @var $this CatReactController */
/* @var $model CatReact */

$this->breadcrumbs=array(
	'Cat Reacts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatReact', 'url'=>array('index')),
	array('label'=>'Create CatReact', 'url'=>array('create')),
	array('label'=>'Update CatReact', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatReact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatReact', 'url'=>array('admin')),
);
?>

<h1>View CatReact #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'categoria',
		'clave',
		'nombre',
		'unidad',
		'status',
	),
)); ?>
