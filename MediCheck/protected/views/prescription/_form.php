<?php
/* @var $this PrescriptionController */
/* @var $model Prescription */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prescription-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'patientid'); ?>
		<?php echo $form->textField($model,'patientid'); ?>
		<?php echo $form->error($model,'patientid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doctorname'); ?>
		<?php echo $form->textField($model,'doctorname'); ?>
		<?php echo $form->error($model,'doctorname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doctorid'); ?>
		<?php echo $form->textField($model,'doctorid'); ?>
		<?php echo $form->error($model,'doctorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added'); ?>
		<?php echo $form->textField($model,'added',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosis'); ?>
		<?php echo $form->textField($model,'diagnosis',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'diagnosis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->