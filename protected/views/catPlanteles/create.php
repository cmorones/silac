<?php
/* @var $this CatPlantelesController */
/* @var $model CatPlanteles */

$this->breadcrumbs=array(
	'Cat Planteles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatPlanteles', 'url'=>array('index')),
	array('label'=>'Manage CatPlanteles', 'url'=>array('admin')),
);
?>

<h1>Create CatPlanteles</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>