<?php
           //MyPrimary
class AjaxmessController extends MyPrimary {
    // actionIndex вызывается всегда, когда action не указан явно.
    function actionIndex(){  }  
      
    //Актуальные темы 
        public function actionForum()	
        {                 
            if (Yii::app()->user->name !='reg') { return false;} 
            
            // если запрос асинхронный, то нам нужно отдать только данные
            if(Yii::app()->request->isAjaxRequest){ 
                
                $this->param = $_POST; 
                Yii::import('application.folder.Verification', true);
                $verific = new Verification($this->param ['topic'], 'text2'); 
                
                $idHomeowners =Yii::app()->user->id[0];
         
                $sql="INSERT INTO `topics` 
                            (`idHomeowners`, `mess` , `sendTime` ) 
                     VALUES ('$idHomeowners', '$verific', CURRENT_TIMESTAMP)";
                    
                Yii::app()->db->createCommand($sql)->execute(); 
               
             //  Отправка результата в алерт
             //$str = '';  foreach ($_POST as $a => $b) {$str .= "$a => $b + $verific"; }  echo $str;        
                
        	   }
       }
    
    
    
    
}