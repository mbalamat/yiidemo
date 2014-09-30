<?php
/* @var $this AppointmentsController */
/* @var $model Appointments */

$this->breadcrumbs=array(
	'Appointments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Appointments', 'url'=>array('index')),
	array('label'=>'Manage Appointments', 'url'=>array('admin')),
);
?>

<h1>Create Appointments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>