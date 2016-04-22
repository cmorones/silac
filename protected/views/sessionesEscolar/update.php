<?php
/* @var $this SessionesEscolarController */
/* @var $model SessionesEscolar */

$this->breadcrumbs=array(
	'Sessiones Escolars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SessionesEscolar', 'url'=>array('index')),
	array('label'=>'Create SessionesEscolar', 'url'=>array('create')),
	array('label'=>'View SessionesEscolar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SessionesEscolar', 'url'=>array('admin')),
);
?>

<h1>Update SessionesEscolar <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>