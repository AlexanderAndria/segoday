<?php
/* @var $this TodayController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Todays',
);

$this->menu=array(
	array('label'=>'Create Today', 'url'=>array('create')),
	array('label'=>'Manage Today', 'url'=>array('admin')),
);
?>

<h1>Todays</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
