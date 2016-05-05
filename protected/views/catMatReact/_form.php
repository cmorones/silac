<?php
/* @var $this CatMatReactController */
/* @var $model CatMatReact */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cat-mat-react-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	 'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'clientOptions'=>array(
        //'validateOnSubmit'=>true,
        //'validateOnChange'=>true,
        //'validateOnType'=>true,
        ),
    'htmlOptions'=>array('class'=>'form-horizontal',
     'role'=>'form'),

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>



	<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'categoria'); ?></label>
						<div class="col-sm-4">
							<?php echo $form->dropDownList($model, 'categoria', $cat, array('id' => 'id_categoria'));?>
							<?php echo $form->error($model,'categoria'); ?>
						</div>
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'tipo'); ?></label>
						<div class="col-sm-4">
							<?php echo $form->dropDownList($model, 'tipo', $tipo, array('id' => 'id_tipo'));?>
							<?php echo $form->error($model,'tipo'); ?>
						</div>
						
	</div>

		<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'tipo_des'); ?></label>
						<div class="col-sm-4">
							<?php echo $form->dropDownList($model, 'tipo_des', $tipoMat, array('id' => 'id_tipoMat'));?>
							<?php echo $form->error($model,'tipo_des'); ?>
						</div>
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'unidad'); ?></label>
						<div class="col-sm-4">
							<?php echo $form->dropDownList($model, 'unidad', $med, array('id' => 'id_medida'));?>
							<?php echo $form->error($model,'unidad'); ?>
						</div>
	</div>

	<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'clave'); ?></label>
						<div class="col-sm-4">
							<?php echo $form->textField($model,'clave'); ?>
							<?php echo $form->error($model,'clave'); ?>
						</div>
						
	</div>

	<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'nombre'); ?></label>
						<div class="col-sm-8">
							<?php echo $form->textField($model,'nombre'); ?>
							<?php echo $form->error($model,'nombre'); ?>
						</div>
						
	</div>

	<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'status'); ?></label>
						<div class="col-sm-4">
							<?php echo $form->dropDownList($model, 'status', $status, array('id' => 'id_status'));?>
							<?php echo $form->error($model,'status'); ?>
						</div>
						
	</div>



<div class="col-sm-6">

							<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Save', array('class'=>'btn btn-primary btn-label-left')); ?>
							
						
						</div>
	






<?php $this->endWidget(); ?>

