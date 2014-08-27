<?php
if (Yii::app()->user->name != 'MaXiM') return false;
           
class AjaxController extends CController {
    // actionIndex вызывается всегда, когда action не указан явно.
    function actionIndex(){
       if (Yii::app()->user->name != 'MaXiM'){ die('ddd');}
    }    
        //Собственникижилья
        public function actionHomeowners()	
        {             
            //CURRENT_TIMESTAMP, - автоматически вставить текущую дату
            // Create table ЗАКАЗЫ 
            $sql='CREATE TABLE IF NOT EXISTS  Homeowners  (
            id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,            
            firstName VARCHAR(255) NOT NULL,
            lastName VARCHAR(255) NOT NULL,
            patronymicName VARCHAR(255) default "",
            room TINYINT default 0,
            phone VARCHAR(255) default "",
            password VARCHAR(255) NOT NULL,
            validation TINYINT UNSIGNED default 0,   
            rights VARCHAR(255) default "reg",          
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
        echo Yii::app()->user->name;  
	}
    
    
    
}