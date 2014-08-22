<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
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
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/ie10-viewport-bug-workaround.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Подключение моих  стилей-->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"></head>

<body class="bs-docs-home">

 <!-- Modal  Регистрация-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content panel panel-primary">
              <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title panel-title" id="myModalLabel">Регистрация</h3>
              </div>
              <div class="modal-body">
                <form role="form">
                  <div class="form-group has-success has-feedback">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>

                  <div class="form-group has-error has-feedback">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class="bg-danger padding10">Введен не верный пароль</p>
                  </div>


                  <div class="form-group">
                    <a href="">Забыли пароль? Восстановить.</a>
                  </div>

                  <div class="modal-footer">
                    <div class="btn-group btn-group-justified">

                      <div class="btn-group">
                        <button type="button" class="btn btn-default">Зарегистрироваться</button>
                      </div>

                      <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Войти</button>
                      </div>

                    </div>
                  </div>

                </form>


              </div>
            </div>
          </div>
        </div>

       
       


	<div class="navbar navbar-default navbar-blue navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">г. Новосибирск, ул.Советская, 79а</a>
			</div>
			<div class="navbar-collapse collapse">
				<form class="navbar-form navbar-right" role="form">
					<div class="form-group">
						<input type="text" placeholder="Телефон" class="form-control"></div>
					<div class="form-group">
						<input type="password" placeholder="Пароль" class="form-control"></div>
					<button type="submit" class="btn btn-success">Вход</button>
				</form>
			</div>
			<!--/.navbar-collapse -->
		</div>
	</div>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron jumbotron-my lobster text-center">
		<div class="container">

			<h1 class="">
				Советская, 79а
				<br />
				г. Новосибирск
			</h1>
			<p>Сайт для собственников жилья.</p>
			<p>
				<a class="btn btn-success btn-lg tx-sp3" role="button" data-target="#myModal" data-toggle="modal">РЕГИСТРАЦИЯ &raquo;</a>
				


			</p>
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
			
			<hr />

		<footer>
			<p>
				<a target="_blank" href="http://сайтсайтов.рф/">СайтСайтов</a>
				&copy; Company <?php echo date('Y'); ?> 
			</p>
			<!-- Компоненты для админа -->
			<p>	
				<a  href="/">Главная</a>	
				<a target="_blank" href="/gii/">gii</a>	
				<a target="_blank" href="/NewDb">NewDb</a>	

			</p> <!-- Компоненты для админа /-->


		</footer>
	</div>
	<!-- /container -->

	<!-- Bootstrap core JavaScript
    ================================================== -->
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>

	<!-- Подключение  моих плагинов  -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
</body>
</html>