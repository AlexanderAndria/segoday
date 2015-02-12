<?php
/* @var $this TodayController */
/* @var $model Today */

$this->breadcrumbs=array(
	'Todays'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Today', 'url'=>array('index')),
	array('label'=>'Manage Today', 'url'=>array('admin')),
);
?>

<h1>Create Today</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>