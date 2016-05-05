<?php
/* @var $this CatTipoMatController */
/* @var $model CatTipoMat */

$this->breadcrumbs=array(
	'Cat Tipo Mats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatTipoMat', 'url'=>array('index')),
	array('label'=>'Manage CatTipoMat', 'url'=>array('admin')),
);
?>

<h1>Create CatTipoMat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>