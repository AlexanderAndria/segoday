<?php
/* @var $this TypeEventController */
/* @var $model TypeEvent */

$this->breadcrumbs=array(
	'Type Events'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TypeEvent', 'url'=>array('index')),
	array('label'=>'Create TypeEvent', 'url'=>array('create')),
	array('label'=>'View TypeEvent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TypeEvent', 'url'=>array('admin')),
);
?>

<h1>Update TypeEvent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>