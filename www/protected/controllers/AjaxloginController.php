<?php
          
class AjaxloginController extends MyPrimary {
    // actionIndex вызывается всегда, когда action не указан явно.
    function actionIndex(){ 
        
     
               
        // telephone password
        
        // если запрос асинхронный, то нам нужно отдать только данные
            if(Yii::app()->request->isAjaxRequest){ 
                
                $this->param = $_POST; 
                
                $str ='';
                
                Yii::import('application.folder.Verification', true);
                $verific = new Verification($this->param ['telephone'], 'tel'); 
                
                $user = Yii::app()->db->createCommand()
                ->select( array('id','password', 'rights', 'firstName'))
                ->from('homeowners u')      
                ->where('phone="'.$verific.'"')
                ->queryAll(); 
                
                //Проверка наличия телефона
                if ($user) { 
                    
                    //Проверка совпадения пароля
                    $passwordInput= $verific->newValue ( $this->param ['password'], 'pass' );
                    if ($passwordInput == $user[0]['password']) {
                            //Все проверки верны
                            Yii::app()->user->name = $user[0]['rights'];
                            Yii::app()->user->id= array($user[0]['id'],$user[0]['firstName'],'');
                            
                            //Если входит админ
                            $telephone = $verific->newValue ($this->param ['telephone'], 'tel'); 
                            if ( $telephone =='+7(952)944-38-87') { 
                                Yii::app()->user->name ='Максим';
                                Yii::app()->user->id= array($user[0]['id'],'Максим','admin');
                            }
                        
                    }
                    else $str.= 'Не верный пароль.';
                                    
                } else { $str.=  'Такого телефона не зарегистрировано. Пройдите регистрацию.'; }                
          
               
               
               
               echo $str;   
                
         } 
        
    }
    
 
  
    
    
    
}