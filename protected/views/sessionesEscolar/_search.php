<?php
/* @var $this SessionesEscolarController */
/* @var $model SessionesEscolar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_periodo'); ?>
		<?php echo $form->textField($model,'id_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_plantel'); ?>
		<?php echo $form->textField($model,'id_plantel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_profesor'); ?>
		<?php echo $form->textField($model,'id_profesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clave'); ?>
		<?php echo $form->textField($model,'clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clave_materia'); ?>
		<?php echo $form->textField($model,'clave_materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sesion_dia'); ?>
		<?php echo $form->textField($model,'sesion_dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_ini'); ?>
		<?php echo $form->textField($model,'hora_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_grupo'); ?>
		<?php echo $form->textField($model,'id_grupo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->