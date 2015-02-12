<?php
/* @var $this TodayController */
/* @var $model Today */

$this->breadcrumbs=array(
	'Todays'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Today', 'url'=>array('index')),
	array('label'=>'Create Today', 'url'=>array('create')),
	array('label'=>'Update Today', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Today', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Today', 'url'=>array('admin')),
);
?>

<h1>View Today #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'descr',
		'pathImg',
		'date',
		'type_id',
		'place',
		'place_link',
	),
)); ?>
