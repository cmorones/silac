<?php
/* @var $this SesionesController */
/* @var $data Sesiones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_periodo')); ?>:</b>
	<?php echo CHtml::encode($data->id_periodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_profesor')); ?>:</b>
	<?php echo CHtml::encode($data->id_profesor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_asignatura')); ?>:</b>
	<?php echo CHtml::encode($data->id_asignatura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_grupo')); ?>:</b>
	<?php echo CHtml::encode($data->id_grupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_modalidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_modalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_ini')); ?>:</b>
	<?php echo CHtml::encode($data->hora_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_fin')); ?>:</b>
	<?php echo CHtml::encode($data->hora_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_estudiantes')); ?>:</b>
	<?php echo CHtml::encode($data->num_estudiantes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('turno')); ?>:</b>
	<?php echo CHtml::encode($data->turno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_sesion')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_sesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actividades')); ?>:</b>
	<?php echo CHtml::encode($data->actividades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_reg')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_mod')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_mod); ?>
	<br />

	*/ ?>

</div>