<?php
/* @var $this SettingsController */
/* @var $data Settings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategory_first')); ?>:</b>
	<?php echo CHtml::encode($data->kategory_first); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_event_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_event_id); ?>
	<br />


</div>