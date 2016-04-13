<?php
/* @var $this InvReactController */
/* @var $model InvReact */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inv-react-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_material'); ?>
		<?php echo $form->textField($model,'id_material'); ?>
		<?php echo $form->error($model,'id_material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_plantel'); ?>
		<?php echo $form->textField($model,'id_plantel'); ?>
		<?php echo $form->error($model,'id_plantel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_medida'); ?>
		<?php echo $form->textField($model,'id_medida'); ?>
		<?php echo $form->error($model,'id_medida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_reg'); ?>
		<?php echo $form->textField($model,'fecha_reg'); ?>
		<?php echo $form->error($model,'fecha_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_mod'); ?>
		<?php echo $form->textField($model,'fecha_mod'); ?>
		<?php echo $form->error($model,'fecha_mod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->