<?php
/* @var $this TargetUrlController */
/* @var $model TargetUrl */

$this->breadcrumbs=array(
	'Target Urls'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TargetUrl', 'url'=>array('index')),
	array('label'=>'Create TargetUrl', 'url'=>array('create')),
	array('label'=>'Update TargetUrl', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TargetUrl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TargetUrl', 'url'=>array('admin')),
);
?>

<h1>View TargetUrl #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'url',
		'name',
		'type_event_id',
	),
)); ?>
