<?php
/* @var $this AppointmentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Appointments',
);

$this->menu=array(
	array('label'=>'Create Appointments', 'url'=>array('create')),
	array('label'=>'Manage Appointments', 'url'=>array('admin')),
);
?>

<h1>Appointments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
