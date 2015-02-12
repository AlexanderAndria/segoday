<?php
/* @var $this TypeEventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Type Events',
);

$this->menu=array(
	array('label'=>'Create TypeEvent', 'url'=>array('create')),
	array('label'=>'Manage TypeEvent', 'url'=>array('admin')),
);
?>

<h1>Type Events</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
