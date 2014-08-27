<?php
if (Yii::app()->user->name !='reg') die();


class QuestionsController extends Primary
{
    
     public $content_sliader ='
    <h1>Актуальные вопросы</h1> 
     
    '; 	
    public $content_css;// = '<link rel="stylesheet" href="/css/main_singup.css"/>'; 
    
	public function actionIndex()
	{  $this->firstfunc();
		$this->render('index');
	}
    
    
    public function firstfunc ()
	{   
	    if (isset($_GET['first'])){
            $param = $_GET['first'];		
        if ($param ==1) { $this->content_sliader = '<h1>Поздравляем! <br />Вы впервые на сайте!</h1><p class="lead">Регистрация прошла успешно </p>'; }
	}
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