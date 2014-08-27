<?php
/* @var $this HomeownersController */
/* @var $model Homeowners */

$this->breadcrumbs=array(
	'Homeowners'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Homeowners', 'url'=>array('index')),
	array('label'=>'Create Homeowners', 'url'=>array('create')),
	array('label'=>'Update Homeowners', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Homeowners', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Homeowners', 'url'=>array('admin')),
);
?>

<h1>View Homeowners #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstName',
		'lastName',
		'patronymicName',
		'room',
		'phone',
		'password',
		'validation',
		'email',
		'hireDate',
		'registerDate',
		'ip',
	),
)); ?>
