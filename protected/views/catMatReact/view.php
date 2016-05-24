<?php
/* @var $this CatMatReactController */
/* @var $model CatMatReact */

$this->breadcrumbs=array(
	'Cat Mat Reacts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatMatReact', 'url'=>array('index')),
	array('label'=>'Create CatMatReact', 'url'=>array('create')),
	array('label'=>'Update CatMatReact', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatMatReact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatMatReact', 'url'=>array('admin')),
);
?>

<h1>View CatMatReact #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'categoria',
		'tipo',
		'clave',
		'nombre',
		'unidad',
		'status',
	),
)); ?>
