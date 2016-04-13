<?php
/* @var $this CatMedidaController */
/* @var $model CatMedida */

$this->breadcrumbs=array(
	'Cat Medidas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatMedida', 'url'=>array('index')),
	array('label'=>'Manage CatMedida', 'url'=>array('admin')),
);
?>

<h1>Create CatMedida</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>