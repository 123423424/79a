<?php
if (Yii::app()->user->name != 'MaXiM') return false;
           
class AjaxController extends CController {
    // actionIndex вызывается всегда, когда action не указан явно.
    function actionIndex(){
       if (Yii::app()->user->name != 'MaXiM'){ die('ddd');} else {echo 'jjj';}
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
    
    //Отвеченные вопросы
        public function actionUnanswered()	
        {             
            //CURRENT_TIMESTAMP, - автоматически вставить текущую дату  //idAnswers MEDIUMINT UNSIGNED  NOT NULL default 0,   
            // Create table ЗАКАЗЫ 
            $sql='CREATE TABLE IF NOT EXISTS  Unanswered  (
            idAnswers MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,  
            idHomeowners MEDIUMINT UNSIGNED  NOT NULL default 0, 
            idQuestion MEDIUMINT UNSIGNED  NOT NULL default 0, 
                         
           
            INDEX (idHomeowners)          
            )  ';
        Yii::app()->db->createCommand($sql)->execute(); 
        
        //$this->render('homeowners');  
        //$this->renderPartial ('homeowners');    
        echo Yii::app()->user->name;  
	}
    
    //Ответы
        public function actionAnswers()	
        {             
            //CURRENT_TIMESTAMP, - автоматически вставить текущую дату
            // Create table ЗАКАЗЫ 
            $sql='CREATE TABLE IF NOT EXISTS  Answers  (
            id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,  
            idAnswers MEDIUMINT UNSIGNED default 0,
            nameAnswer  VARCHAR(255) default "", 
            Answer VARCHAR(255) default "",                 
           
            INDEX (idAnswers)          
            )  ';
        Yii::app()->db->createCommand($sql)->execute(); 
        
        //$this->render('homeowners');  
        //$this->renderPartial ('homeowners');    
        echo Yii::app()->user->name;  
	}
    
    //Актуальные темы 
        public function actionTopics()	
        {             
            //CURRENT_TIMESTAMP, - автоматически вставить текущую дату
            // Create table ЗАКАЗЫ 
            $sql='CREATE TABLE IF NOT EXISTS  Topics  (
            idTopic MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,  
            idHomeowners MEDIUMINT UNSIGNED  NOT NULL default 0, 
            mess VARCHAR(255) default "", 
            sendTime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
            visibl MEDIUMINT UNSIGNED NOT NULL default 0,  
            
            INDEX (idTopic)          
            )  ';
        Yii::app()->db->createCommand($sql)->execute(); 
        
        //$this->render('homeowners');  
        //$this->renderPartial ('homeowners');    
        echo Yii::app()->user->name;  
	}
    

    
    
    
    
}