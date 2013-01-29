<?php
/* @var $this TransactionsController */
/* @var $model Transactions */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Transactions', 'url'=>array('index')),
	array('label'=>'Update Transactions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Manage Transactions', 'url'=>array('admin')),
);
?>

<h1>View Transactions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'plat',
		'customer',
		'remarks',
		'supir',
		'DN',
		'wb_in',
		'time_in',
		'wb_out',
		'time_out',
		'opr_in',
		'opr_out',
		'approve',
		'create_at',
		'last_update',
	),
)); ?>
