<?php
/* @var $this CatPlantelesController */
/* @var $model CatPlanteles */

$this->breadcrumbs=array(
	'Cat Planteles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatPlanteles', 'url'=>array('index')),
	array('label'=>'Create CatPlanteles', 'url'=>array('create')),
	array('label'=>'View CatPlanteles', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatPlanteles', 'url'=>array('admin')),
);
?>

<h1>Update CatPlanteles <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>