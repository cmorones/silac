<?php
/* @var $this ConsumoReactivosController */
/* @var $model ConsumoReactivos */

$this->breadcrumbs=array(
	'Consumo Reactivoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ConsumoReactivos', 'url'=>array('index')),
	array('label'=>'Create ConsumoReactivos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#consumo-reactivos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Consumo Reactivoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'consumo-reactivos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_material',
		'id_plantel',
		'id_sesion',
		'id_materia',
		'cantidad',
		/*
		'fecha_reg',
		'fecha_mod',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
