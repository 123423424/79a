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
            Yii::import('application.folder.Verification', true);
            $verific = new Verification($this->param ['nameInput'], 'text'); 
          
         $nameInput= $verific;
         $surnameInput =$verific->newValue ( $this->param ['surnameInput'], 'text' );
         $patronymicInput =$verific->newValue ( $this->param ['patronymicInput'], 'text' );         
         $roomInput= $verific->newValue ( $this->param ['roomInput'], 'num' );
         $telephoneInput =$verific->newValue( $this->param ['telephoneInput'], 'tel' );         
         $mailInput= $verific->newValue ( $this->param ['mailInput'], 'email' );
         $passwordInput= $verific->newValue ( $this->param ['passwordInput'], 'pass' );
         
         $ip = $_SERVER['REMOTE_ADDR'];    
         
         

  /*  $command = Yii::app()->db->createCommand();
	    $command->insert('homeowners', array( 
          //  'id'=> 'NULL'
            'firstName'=> $nameInput,
            'lastName'=> $surnameInput,
            'patronymicName'=> $patronymicInput,
            'room'=> $roomInput,
            'phone'=> $telephoneInput,
            'password'=> $passwordInput,
            'validation'=>  0,
            'email'=> $mailInput,
            'hireDate'=> CURRENT_TIMESTAMP,
            'registerDate'=> CURRENT_TIMESTAMP,
          'ip'=> INET_ATON($ip), 
          
          ///
          
            ///
            
           // 'firstName'=>'testerexample', 
));*/
     
         
         $sql="INSERT INTO `homeowners` (`firstName`, `lastName`, `patronymicName`, `room`, `phone`, `password`, `validation`,  `email`, `hireDate`, `registerDate`, `ip`) VALUES ('$nameInput', '$surnameInput', '$patronymicInput', '$roomInput', '$telephoneInput', '$passwordInput', '0',  '$mailInput', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, INET_ATON('$ip'))";
            
            Yii::app()->db->createCommand($sql)->execute();
             $nomId = Yii::app()->db->getLastInsertID();
         
           // $this->ch($this->valid ( $this->param ['telephoneInput'], 'tel' ));
            $this->ch($nomId, $nameInput);
            
            
            // Завершаем приложение
            Yii::app()->end(); 
        }
                 
	}
   
    
    private function ch($lastId, $nameInput)
	{
	   Yii::app()->user->name = "reg"; 
       Yii::app()->user->id= array($lastId, $nameInput);
       
       
       
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