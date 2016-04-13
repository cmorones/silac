<?php
/* @var $this InvReactController */
/* @var $data InvReact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_material')); ?>:</b>
	<?php echo CHtml::encode($data->id_material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_plantel')); ?>:</b>
	<?php echo CHtml::encode($data->id_plantel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medida')); ?>:</b>
	<?php echo CHtml::encode($data->id_medida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_reg')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_mod')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_mod); ?>
	<br />


</div>