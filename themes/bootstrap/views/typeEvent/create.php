<?php
/* @var $this TypeEventController */
/* @var $model TypeEvent */

$this->breadcrumbs=array(
	'Type Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TypeEvent', 'url'=>array('index')),
	array('label'=>'Manage TypeEvent', 'url'=>array('admin')),
);
?>

<h1>Create TypeEvent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>