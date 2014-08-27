<?php

class SignupController extends Primary
{
    public $content_sliader ='
    <h1>Регистрация</h1> 
    <p class="lead">Все введенные данные конфиденциальны <br />и нужны лишь для связи с Вами. </p>    
    '; 	
    public $content_css = '<link rel="stylesheet" href="/css/main_singup.css"/>'; 
	
    
    
    public function actionIndex()
	{  
		$this->render('index');
        
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}