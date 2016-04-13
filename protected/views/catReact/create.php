<?php
/* @var $this CatReactController */
/* @var $model CatReact */

$this->breadcrumbs=array(
	'Cat Reacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatReact', 'url'=>array('index')),
	array('label'=>'Manage CatReact', 'url'=>array('admin')),
);
?>

<h1>Create CatReact</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>