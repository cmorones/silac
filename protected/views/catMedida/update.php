<?php
/* @var $this CatMedidaController */
/* @var $model CatMedida */

$this->breadcrumbs=array(
	'Cat Medidas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatMedida', 'url'=>array('index')),
	array('label'=>'Create CatMedida', 'url'=>array('create')),
	array('label'=>'View CatMedida', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatMedida', 'url'=>array('admin')),
);
?>

<h1>Update CatMedida <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>