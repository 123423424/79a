<?php
/* @var $this HomeownersController */
/* @var $model Homeowners */

$this->breadcrumbs=array(
	'Homeowners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Homeowners', 'url'=>array('index')),
	array('label'=>'Manage Homeowners', 'url'=>array('admin')),
);
?>

<h1>Create Homeowners</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>