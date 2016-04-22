<?php
/* @var $this SesionesController */
/* @var $model Sesiones */
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
		<?php echo $form->label($model,'id_profesor'); ?>
		<?php echo $form->textField($model,'id_profesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_asignatura'); ?>
		<?php echo $form->textField($model,'id_asignatura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_grupo'); ?>
		<?php echo $form->textField($model,'id_grupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_modalidad'); ?>
		<?php echo $form->textField($model,'id_modalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
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
		<?php echo $form->label($model,'num_estudiantes'); ?>
		<?php echo $form->textField($model,'num_estudiantes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'turno'); ?>
		<?php echo $form->textField($model,'turno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_sesion'); ?>
		<?php echo $form->textField($model,'tipo_sesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actividades'); ?>
		<?php echo $form->textField($model,'actividades'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
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