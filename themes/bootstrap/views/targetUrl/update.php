<?php
/* @var $this TargetUrlController */
/* @var $model TargetUrl */

$this->breadcrumbs=array(
	'Target Urls'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TargetUrl', 'url'=>array('index')),
	array('label'=>'Create TargetUrl', 'url'=>array('create')),
	array('label'=>'View TargetUrl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TargetUrl', 'url'=>array('admin')),
);
?>

<h1>Update TargetUrl <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>