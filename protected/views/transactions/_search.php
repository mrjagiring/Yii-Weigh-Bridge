<?php
/* @var $this TransactionsController */
/* @var $model Transactions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plat'); ?>
		<?php echo $form->textField($model,'plat',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer'); ?>
		<?php echo $form->textField($model,'customer',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supir'); ?>
		<?php echo $form->textField($model,'supir',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DN'); ?>
		<?php echo $form->textField($model,'DN',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wb_in'); ?>
		<?php echo $form->textField($model,'wb_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_in'); ?>
		<?php echo $form->textField($model,'time_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wb_out'); ?>
		<?php echo $form->textField($model,'wb_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_out'); ?>
		<?php echo $form->textField($model,'time_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opr_in'); ?>
		<?php echo $form->textField($model,'opr_in',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opr_out'); ?>
		<?php echo $form->textField($model,'opr_out',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'approve'); ?>
		<?php echo $form->textField($model,'approve',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_at'); ?>
		<?php echo $form->textField($model,'create_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->