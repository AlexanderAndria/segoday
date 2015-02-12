<?php
/* @var $this TodayController */
/* @var $model Today */

$this->breadcrumbs=array(
	'Todays'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Today', 'url'=>array('index')),
	array('label'=>'Create Today', 'url'=>array('create')),
	array('label'=>'View Today', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Today', 'url'=>array('admin')),
);
?>

<h1>Update Today <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>