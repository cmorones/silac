<?php
/* @var $this CatTipoMatController */
/* @var $model CatTipoMat */

$this->breadcrumbs=array(
	'Cat Tipo Mats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatTipoMat', 'url'=>array('index')),
	array('label'=>'Create CatTipoMat', 'url'=>array('create')),
	array('label'=>'View CatTipoMat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatTipoMat', 'url'=>array('admin')),
);
?>

<h1>Update CatTipoMat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>