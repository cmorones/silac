<?php
/* @var $this SessionesEscolarController */
/* @var $model SessionesEscolar */

$this->breadcrumbs=array(
	'Sessiones Escolars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SessionesEscolar', 'url'=>array('index')),
	array('label'=>'Manage SessionesEscolar', 'url'=>array('admin')),
);
?>

<h1>Create SessionesEscolar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>