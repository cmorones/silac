<?php
/* @var $this CatTipoMatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Tipo Mats',
);

$this->menu=array(
	array('label'=>'Create CatTipoMat', 'url'=>array('create')),
	array('label'=>'Manage CatTipoMat', 'url'=>array('admin')),
);
?>

<h1>Cat Tipo Mats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
