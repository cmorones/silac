<?php
/* @var $this SalidasReactivosController */
/* @var $model SalidasReactivos */
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
		<?php echo $form->label($model,'id_sesion'); ?>
		<?php echo $form->textField($model,'id_sesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_material'); ?>
		<?php echo $form->textField($model,'id_material'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_plantel'); ?>
		<?php echo $form->textField($model,'id_plantel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_medida'); ?>
		<?php echo $form->textField($model,'id_medida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_reg'); ?>
		<?php echo $form->textField($model,'user_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_mod'); ?>
		<?php echo $form->textField($model,'user_mod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_reg'); ?>
		<?php echo $form->textField($model,'fecha_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_mod'); ?>
		<?php echo $form->textField($model,'fecha_mod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->