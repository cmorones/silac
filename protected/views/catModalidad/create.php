<?php
/* @var $this CatModalidadController */
/* @var $model CatModalidad */

$this->breadcrumbs=array(
	'Cat Modalidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatModalidad', 'url'=>array('index')),
	array('label'=>'Manage CatModalidad', 'url'=>array('admin')),
);
?>

<h1>Create CatModalidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>