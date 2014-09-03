<?php

class DefaultController extends Controller
{
    
    public $layout = '/layouts/column1';
	public function actionIndex()
	{
		$this->render('index');
	}
    
    	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
  public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('',''),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('',''),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','view','index'),
				'users'=>array('MaXiM'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
    
}