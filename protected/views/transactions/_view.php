<?php
/* @var $this TransactionsController */
/* @var $data Transactions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plat')); ?>:</b>
	<?php echo CHtml::encode($data->plat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer')); ?>:</b>
	<?php echo CHtml::encode($data->customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supir')); ?>:</b>
	<?php echo CHtml::encode($data->supir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DN')); ?>:</b>
	<?php echo CHtml::encode($data->DN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wb_in')); ?>:</b>
	<?php echo CHtml::encode($data->wb_in); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('time_in')); ?>:</b>
	<?php echo CHtml::encode($data->time_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wb_out')); ?>:</b>
	<?php echo CHtml::encode($data->wb_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_out')); ?>:</b>
	<?php echo CHtml::encode($data->time_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opr_in')); ?>:</b>
	<?php echo CHtml::encode($data->opr_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opr_out')); ?>:</b>
	<?php echo CHtml::encode($data->opr_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approve')); ?>:</b>
	<?php echo CHtml::encode($data->approve); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_at')); ?>:</b>
	<?php echo CHtml::encode($data->create_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	*/ ?>

</div>