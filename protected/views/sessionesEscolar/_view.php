<?php
/* @var $this SessionesEscolarController */
/* @var $data SessionesEscolar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_periodo')); ?>:</b>
	<?php echo CHtml::encode($data->id_periodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_plantel')); ?>:</b>
	<?php echo CHtml::encode($data->id_plantel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_profesor')); ?>:</b>
	<?php echo CHtml::encode($data->id_profesor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave_materia')); ?>:</b>
	<?php echo CHtml::encode($data->clave_materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sesion_dia')); ?>:</b>
	<?php echo CHtml::encode($data->sesion_dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_ini')); ?>:</b>
	<?php echo CHtml::encode($data->hora_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_fin')); ?>:</b>
	<?php echo CHtml::encode($data->hora_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_grupo')); ?>:</b>
	<?php echo CHtml::encode($data->id_grupo); ?>
	<br />

	*/ ?>

</div>