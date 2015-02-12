<?php
/* @var $this TypeEventController */
/* @var $model TypeEvent */

$this->breadcrumbs=array(
	'Type Events'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TypeEvent', 'url'=>array('index')),
	array('label'=>'Create TypeEvent', 'url'=>array('create')),
	array('label'=>'Update TypeEvent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TypeEvent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TypeEvent', 'url'=>array('admin')),
);
?>

<h1>View TypeEvent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
	),
)); ?>
