<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="ккк">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">

	<!-- Подключение  jquery -->
	<script src="http://yandex.st/jquery/2.1.1/jquery.min.js"></script>
	<!-- Подключение  bootstrap.min.js  -->

	<!-- Шрифт -->
	<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<title>Советская, 79а</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo Yii::app()->
	request->baseUrl; ?>/css/bootstrap.css">
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Подключение моих  стилей-->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
    <?php if ( isset($this->content_sliader)) echo $this->content_css; ?>
    </head>

<body class="bs-docs-home">


       
       

	<!-- Навигация -->
	<div class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand hidden-xs " href="/">г. Новосибирск, ул.Советская, 79а</a>
                <a class="navbar-brand hidden-sm hidden-md hidden-lg " href="/">ул.Советская, 79а</a>
			</div>
			<div class="navbar-collapse collapse">
            
				<form class="navbar-form navbar-right" role="form">
					<div class="form-group">
						<input type="text" id="telephoneInputMain" placeholder="Телефон" class="form-control telephone"/>                       
                        
                        
                        </div>
					<div class="form-group">
						<input type="password" placeholder="Пароль" class="form-control"/></div>
					<button type="submit" class="btn btn-success">Вход</button>
				</form>
                
			</div>
			<!--/.navbar-collapse -->
		</div>
	</div>
    
    
    
	<!--  Подключение слайдера    -->
    
    
<div class="jumbotron jumbotron-my lobster text-center">
		      <div class="container">
        			<?php if ( isset($this->content_sliader)) echo $this->content_sliader; ?>
        	   </div>
        	</div> 
    
    

	<div class="container">	

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
            
				<?php echo $content; ?>
				
			</div>
			<div class="col-md-1"></div>
		</div>


	
			
			<hr />

		<footer>
			<p>
				<a target="_blank" href="http://сайтсайтов.рф/">СайтСайтов</a>
				&copy; Company <?php echo date('Y'); ?> 
			</p>
            <a  href="/admin79/input/login">ВХОД(<?php 
            echo Yii::app()->user->name[0].' / '.Yii::app()->user->name;
           
            foreach ($_SESSION as $a => $b) {
                echo "<br />->$a => $b";
            }
            
            ?>)</a>
            
          

<?php
	if ((Yii::app()->user->name == 'MaXiM')|| (Yii::app()->user->name[0] == 'reg')){ 

?>
			<!-- Компоненты для админа -->
			<p>	
				<a  href="/">Главная</a>	<br />
				<a target="_blank" href="/gii/">gii</a>	<br />
				<a target="_blank" href="/NewDb">NewDb</a><br />	
               <a target="_blank" href="/admin79/input">admin79_input</a><br />	
               
               	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(                
                array('label'=>'Главная', 'url'=>array('/')),
                array('label'=>'admin', 'url'=>array('/admin')),
                array('label'=>'Форма валидации', 'url'=>array('/admin/homeowners/')),
                
               
                array('label'=>'Вопросы', 'url'=>array('/questions')), 
                
                array('label'=>'Проверка формы', 'url'=>array('/chekSingup')), 
                array('label'=>'gii', 'url'=>array('/gii')),   
                array('label'=>'Регистрация', 'url'=>array('/signup')),
                				
				array('label'=>'Login', 'url'=>array('admin79/input/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('admin79/input/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),  
            
            
                      
		)); ?>
	</div><!-- mainmenu -->

			</p> <!-- Компоненты для админа /-->

<?php
	    }
?>
		</footer>
	</div>
	<!-- /container -->

	<!-- Bootstrap core JavaScript
    ================================================== -->
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
 
    
    <!-- Валидация телефона -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput-1.3.1.min_.js"></script>
<script type="text/javascript">// <![CDATA[
jQuery(function($) {
      $.mask.definitions['~']='[+-]';      
      $('.telephone').mask('+7(999) 999-99-99');
      $('#roomInput').mask('99');
      
    
   });
// ]]&gt;</script>  
<!-- /Валидация телефона -->

	<!-- Подключение  моих плагинов  -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
</body>
</html>