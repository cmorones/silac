<?php
/* @var $this CatModalidadController */
/* @var $model CatModalidad */

$this->breadcrumbs=array(
	'Cat Modalidads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatModalidad', 'url'=>array('index')),
	array('label'=>'Create CatModalidad', 'url'=>array('create')),
	array('label'=>'View CatModalidad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatModalidad', 'url'=>array('admin')),
);
?>

<h1>Update CatModalidad <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>