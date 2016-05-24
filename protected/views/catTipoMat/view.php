<?php
/* @var $this CatTipoMatController */
/* @var $model CatTipoMat */

$this->breadcrumbs=array(
	'Cat Tipo Mats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatTipoMat', 'url'=>array('index')),
	array('label'=>'Create CatTipoMat', 'url'=>array('create')),
	array('label'=>'Update CatTipoMat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatTipoMat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatTipoMat', 'url'=>array('admin')),
);
?>

<h1>View CatTipoMat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
