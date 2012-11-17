<?php
/* @var $this PrescriptionController */
/* @var $data Prescription */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientid')); ?>:</b>
	<?php echo CHtml::encode($data->patientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctorname')); ?>:</b>
	<?php echo CHtml::encode($data->doctorname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctorid')); ?>:</b>
	<?php echo CHtml::encode($data->doctorid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added')); ?>:</b>
	<?php echo CHtml::encode($data->added); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosis); ?>
	<br />

	*/ ?>

</div>