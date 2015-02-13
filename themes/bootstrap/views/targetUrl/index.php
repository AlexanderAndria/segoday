<?php
/* @var $this TargetUrlController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Target Urls',
);

$this->menu=array(
	array('label'=>'Create TargetUrl', 'url'=>array('create')),
	array('label'=>'Manage TargetUrl', 'url'=>array('admin')),
);
?>

<h1>Target Urls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
