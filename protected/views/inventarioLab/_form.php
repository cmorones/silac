<?php
/* @var $this InventarioLabController */
/* @var $model InventarioLab */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inventario-lab-form',
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




	<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_catmat'); ?></label>
						<div class="col-sm-4">
							<?php echo $form->dropDownList($model, 'id_catmat', $cat, array('id' => 'id_categoria'));?>
							<?php echo $form->error($model,'id_catmat'); ?>
						</div>										
	</div>

	<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_plantel'); ?></label>
						<div class="col-sm-4">
							<?php echo $form->dropDownList($model, 'id_plantel', $plantel, array('id' => 'id_plantel'));?>
							<?php echo $form->error($model,'id_plantel'); ?>
						</div>						
	</div>

	<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'entrada'); ?></label>
						<div class="col-sm-4">
							<?php echo $form->textField($model,'entrada'); ?>
							<?php echo $form->error($model,'entrada'); ?>
						</div>						
	</div>

	<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-4">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Save', array('class'=>'btn btn-primary btn-label-left')); ?>
							
						</div>						
	</div>




<?php $this->endWidget(); ?>
