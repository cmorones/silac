
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<div class="text-center">
						<h3 class="page-header">IEMS -SISTEMA SILAC</h3>
					</div>
					<div class="form-group">
						<label class="control-label"<?php echo $form->labelEx($model,'username'); ?></label>
						<?php echo $form->textField($model,'username'); ?>
						<?php echo $form->error($model,'username'); ?>
					</div>
					<div class="form-group">
						<label class="control-label"><?php echo $form->labelEx($model,'password'); ?></label>
						<?php echo $form->passwordField($model,'password'); ?>
						<?php echo $form->error($model,'password'); ?>
					</div>
					<div class="text-center">
						<?php echo CHtml::submitButton('Ingresar', array('class'=>"btn btn-primary")); ?>

					</div>
















<?php $this->endWidget(); ?>
</div><!-- form -->
<!--

<div class="text-center">
						<h3 class="page-header">IEMS -SISTEMA SILAC</h3>
					</div>
					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" />
					</div>
					<div class="text-center">
						<a href="../index.html" class="btn btn-primary">Sign in</a>
					</div>


					-->