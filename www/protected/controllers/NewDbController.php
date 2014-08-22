<?php

class NewDbController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
    
    public function actionHomeowners()
	{
            //CURRENT_TIMESTAMP, - автоматически вставить текущую дату
            // Create table ЗАКАЗЫ 
            $sql='CREATE TABLE IF NOT EXISTS  Homeowners (
            id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,            
            firstName VARCHAR(255) NOT NULL,
            lastName VARCHAR(255) NOT NULL,
            patronymicName VARCHAR(255) default "",
            room TINYINT default 0,
            phone VARCHAR(255) default "",
            password VARCHAR(255) NOT NULL,
            
            email VARCHAR(255) default "",
          
  
  hireDate TIMESTAMP NOT NULL default "0000-00-00 00:00:00",
registerDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
            
            ip INT UNSIGNED NOT NULL,   
                  
            INDEX (phone),
            INDEX (id)
          
            )  ';
        Yii::app()->db->createCommand($sql)->execute(); 
        //$this->render('homeowners');  
        //$this->renderPartial ('homeowners');    
  
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