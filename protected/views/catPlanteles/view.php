<?php
/* @var $this CatPlantelesController */
/* @var $model CatPlanteles */

$this->breadcrumbs=array(
	'Cat Planteles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CatPlanteles', 'url'=>array('index')),
	array('label'=>'Create CatPlanteles', 'url'=>array('create')),
	array('label'=>'Update CatPlanteles', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CatPlanteles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatPlanteles', 'url'=>array('admin')),
);
?>

<h1>View CatPlanteles #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
