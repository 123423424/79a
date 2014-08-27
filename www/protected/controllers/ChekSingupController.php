<?php


class ChekSingupController extends Primary
{   
     
	public function actionIndex()
	{  
		$this->param = $_POST; 
        //Yii::app()->getRequest()->getPost('surnameInput'); 
       
       // $this->render('index');
       
       // если запрос асинхронный, то нам нужно отдать только данные
        if(Yii::app()->request->isAjaxRequest){ 
          
         $nameInput= $this->valid ( $this->param ['nameInput'], 'text' );
         $surnameInput =$this->valid ( $this->param ['surnameInput'], 'text' );
         $patronymicInput =$this->valid ( $this->param ['patronymicInput'], 'text' );         
         $roomInput= $this->valid ( $this->param ['roomInput'], 'num' );
         $telephoneInput =$this->valid ( $this->param ['telephoneInput'], 'tel' );         
         $mailInput= $this->valid ( $this->param ['mailInput'], 'email' );
         $passwordInput= $this->valid ( $this->param ['passwordInput'], 'pass' );
         
         $ip = $_SERVER['REMOTE_ADDR'];

         
         $sql="INSERT INTO `homeowners` (`id`, `firstName`, `lastName`, `patronymicName`, `room`, `phone`, `password`, `validation`,  `email`, `hireDate`, `registerDate`, `ip`) VALUES (NULL, '$nameInput', '$surnameInput', '$patronymicInput', '$roomInput', '$telephoneInput', '$passwordInput', '0',  '$mailInput', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, INET_ATON('$ip'))";
            
            Yii::app()->db->createCommand($sql)->execute();
         
         
            $this->ch($this->valid ( $this->param ['telephoneInput'], 'tel' ));
            // Завершаем приложение
            Yii::app()->end(); 
        }
                 
	}
    
    private function valid($var, $vol)
	{
		if ($vol == 'num' ) {
		  $var = preg_replace ("/[^0-9]/","", $var );
         
          } // очистить  только числа 
        if ($vol == 'email' ) {
            $var = preg_replace ("/[^a-zA-Z0-9@\._-]/","", $var ); // очистить почту 
           
            }
        if ($vol == 'text' ) {
            $var = preg_replace ("/[^a-zA-ZйцукенгшщзхъэждлорпавыфячсмитьбюЮБЬТИМСЧЯФЫВАПРОЛДЖЭЪХЗЩШГНЕКУЦЙёЁ0-9№@\._-]/","", $var ); // очистить почту 
            
            }
        if ($vol == 'tel' ) {
            $var = preg_replace ("/[^0-9-+()]/","", $var ); // очистить почту            
            }
            
        if ($vol == 'pass' ) {
            $var = preg_replace ("/[^a-zA-Z0-9]/","", $var ); // очистить почту      
            $var = trim(str_replace("`",'',str_replace("\n",'',str_replace("|",'',htmlspecialchars($var))))); // Убираем все ЛЕВЫЕ символы которые могут ввести
            $var = preg_replace("[^a-zA-Z0-9]","",$var); // Дополнительно фильтруем
            $var=md5($var);
     
            }
            
          return $var;   
                
	}
    
    private function ch($tel)
	{
	   Yii::app()->user->name = "reg";  
       
       Yii::app()->user->id= array($tel);
       
       
       
     /*  $session=new CHttpSession;
       $session->open(); 
       $session['nameTelef']=$tel; */
       
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