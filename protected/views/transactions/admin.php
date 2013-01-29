<?php
/* @var $this TransactionsController */
/* @var $model Transactions */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Transactions', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('transactions-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage WB Transactions</h1>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transactions-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'plat',
		'supir',
		'DN',
		'time_in',
		'time_out',
		'wb_in',
		'wb_out',
		array(
			'name' => 'temp',
			'header'=>'Selisih',
			'htmlOptions'=>array('style'=>'text-align: center;'),
			'headerHtmlOptions'=>array('width'=>'70px'),
			'value'=> array($this,'getWeight'),
		),
		'approve',
		/*
		'customer',
		'remarks',
		'opr_in',
		'opr_out',
		'create_at',
		'last_update',
		*/
		array(
			'header'=>'Action',
			'headerHtmlOptions'=>array('width'=>'40px'),
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>
