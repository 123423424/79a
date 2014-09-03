<?php

class ChekQuestionController extends Primary
{   
    
    
	public function actionIndex()
	{  $this->content_sliader ='<h1>Советская, 79а<br /> г. Новосибирск </h1>
        			<p class="lead">Сайт для собственников жилья.</p>';
        $this->param = $_POST; 
        
        //Если отправлена версия
        if  (isset($this->param['version'])){            
            //Создать объект проверки
            Yii::import('application.folder.Verification', true);
            $verific = new Verification($this->param ['version'], 'num');            
            $version = $verific; 
              $str = '';
             //Первая группа вопросов                   
            if ($version == '1') { 
                //Запись в отвеченные вопросы 
                $user = Yii::app()->db->createCommand()
                ->select( array ('idAnswers','idHomeowners', 'idQuestion'))
                ->from('unanswered u')      
                ->where(array('and', 'idHomeowners='.Yii::app()->user->id[0], 'idQuestion=1'))
                ->queryAll();  
                
                //Если был нажат F5  и форма отправилась повторно
                if ($user) { $str = 'Вы уже отвечали на эти вопросы';} 
                //if (false) { $str = 'Вы уже отвечали на эти вопросы';}
                else {                   
                    //Запись в таблицу отвечанных вопросов 
                    $post=new Unanswered;                 
                    $post->idHomeowners =Yii::app()->user->id[0];
                    $post->idQuestion =1;                   
                    $post->save();
                    
                    //Получение ID вставленной записи
                    $idAnswers = Yii::app()->db->getLastInsertID();
                    
                        //Вставка в таблицу ответов 
                        foreach ($_POST as $a => $b ) { 
                             if (!empty($b)){
                            $post=new Answers;
                            $post->idAnswers = $idAnswers; 
                            $a = $verific->newValue ( $a, 'text2' );
                            $post->nameAnswer= $a; //имя вопроса
                            $b = $verific->newValue ( $b, 'text2' ); //
                            $post->Answer= $b; //ответ
                            $post->save(); }
                        }
                    $str = 'Спасибо за Ваши ответы.';
                    }
                
                $this->param['h1'] = $str ;  
              
            } else {$this->param = 'Ваш ответ не отправленн.';}	         
	   }
        $this->render('index');
    }
    
    //Запись в модель ответов
    public function answers($verific)
	{	   
		$post=new Answers;
        $post->idAnswers=3;
        
       // problems 
        
        $nameAnswer = $verific->newValue ( 'Просто 12364 текст', 'num' );
        $post->nameAnswer=$nameAnswer;
        $post->save();
	}
    


}