<?php
/* @var $this HomeownersController */
/* @var $model Homeowners */

$this->breadcrumbs=array(
	'Homeowners'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Homeowners', 'url'=>array('index')),
	array('label'=>'Create Homeowners', 'url'=>array('create')),
	array('label'=>'View Homeowners', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Homeowners', 'url'=>array('admin')),
);
?>

<h1>Update Homeowners <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>