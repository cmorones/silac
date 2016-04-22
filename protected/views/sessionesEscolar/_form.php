<?php
/* @var $this SessionesEscolarController */
/* @var $model SessionesEscolar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sessiones-escolar-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_periodo'); ?>
		<?php echo $form->textField($model,'id_periodo'); ?>
		<?php echo $form->error($model,'id_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_plantel'); ?>
		<?php echo $form->textField($model,'id_plantel'); ?>
		<?php echo $form->error($model,'id_plantel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_profesor'); ?>
		<?php echo $form->textField($model,'id_profesor'); ?>
		<?php echo $form->error($model,'id_profesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave'); ?>
		<?php echo $form->error($model,'clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clave_materia'); ?>
		<?php echo $form->textField($model,'clave_materia'); ?>
		<?php echo $form->error($model,'clave_materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion'); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sesion_dia'); ?>
		<?php echo $form->textField($model,'sesion_dia'); ?>
		<?php echo $form->error($model,'sesion_dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_ini'); ?>
		<?php echo $form->textField($model,'hora_ini'); ?>
		<?php echo $form->error($model,'hora_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin'); ?>
		<?php echo $form->error($model,'hora_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_grupo'); ?>
		<?php echo $form->textField($model,'id_grupo'); ?>
		<?php echo $form->error($model,'id_grupo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->