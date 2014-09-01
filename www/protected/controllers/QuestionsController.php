<?php
if (Yii::app()->user->name !='reg') die();


class QuestionsController extends Primary
{   
    //Количество вопросных тем
    public $IdLastQuestion =1; 	    
    public $content_sliader ='<h1>Актуальные вопросы</h1>';     
    public $content_css='<link rel="stylesheet" href="/css/main_q1.css"/>';// = '<link rel="stylesheet" href="/css/main_singup.css"/>'; 
    
	public function actionIndex()
	{      
	       $this->firstfunc(); 
           $topicalAnswer = $this->topicalAnswer();		   
     
           //Если есть не отвечанные вопросы
           if ($this->IdLastQuestion > $topicalAnswer)  {
                $topicalAnswer++;
                $this->render('index'.$topicalAnswer);}  
           //Если нет не отвеченных вопросов
           else {$this->render('index');} 
           
           
	}
    
    //Если клиент зашел в первый раз
    public function firstfunc ()
	{   
	    if (isset($_GET['first'])){
            $param = $_GET['first']*1;		
        if ($param ==1) { $this->content_sliader = '<h1>Поздравляем! <br />Вы впервые на сайте!</h1><p class="lead">Регистрация прошла успешно </p>'; }
        
	   }
    }
    
    //Проверка: на какую последнюю тему отвечал пользователь
    private function topicalAnswer ()
	{   
	    $user = Yii::app()->db->createCommand()
        ->select (array('idQuestion'))
        //->select(array('id', 'username'));
        ->from('Unanswered')      
        ->where('idHomeowners='.Yii::app()->user->id[0])       
        ->queryAll();
        
        $max =0;
        if ($user) {foreach ($user as $a ) { foreach ($a as $b ) {  if($b > $max) $max = $b;}}}
        return $max;  
    }
    
}