<?php
/* @var $this TargetUrlController */
/* @var $model TargetUrl */

$this->breadcrumbs=array(
	'Target Urls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TargetUrl', 'url'=>array('index')),
	array('label'=>'Manage TargetUrl', 'url'=>array('admin')),
);
?>

<h1>Create TargetUrl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>