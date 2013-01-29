<?php
/* @var $this TransactionsController */
/* @var $model Transactions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transactions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'plat'); ?>
		<?php echo $form->textField($model,'plat',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'plat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer'); ?>
		<?php echo $form->textField($model,'customer',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'customer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supir'); ?>
		<?php echo $form->textField($model,'supir',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'supir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DN'); ?>
		<?php echo $form->textField($model,'DN',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'DN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wb_in'); ?>
		<?php echo $form->textField($model,'wb_in'); ?>
		<?php echo $form->error($model,'wb_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_in'); ?>
		<?php echo $form->textField($model,'time_in'); ?>
		<?php echo $form->error($model,'time_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wb_out'); ?>
		<?php echo $form->textField($model,'wb_out'); ?>
		<?php echo $form->error($model,'wb_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_out'); ?>
		<?php echo $form->textField($model,'time_out'); ?>
		<?php echo $form->error($model,'time_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opr_in'); ?>
		<?php echo $form->textField($model,'opr_in',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'opr_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opr_out'); ?>
		<?php echo $form->textField($model,'opr_out',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'opr_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approve'); ?>
		<?php echo $form->textField($model,'approve',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'approve'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_at'); ?>
		<?php echo $form->textField($model,'create_at'); ?>
		<?php echo $form->error($model,'create_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->