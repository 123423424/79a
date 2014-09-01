<h1>Актуальные вопросы.</h1>

<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->
pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);


?>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main_q1.js"></script>
<div id="test_form" class="lead red"></div>

<form id='formSingup'  method="post" action="/chekQuestion" role="form">

<div class="form-group">
			<label  for="problems">
				Какие проблемы Вы видите у нашего дома (опишите в произвольной форме какие актуальные вопросы Вы видите)?
			</label>
			<textarea class="form-control" id="problems" name="problems" rows="2"></textarea>
			
		</div>



<p><strong>Вы довольны Управляющуй Компанией (ЖЭУ)?</strong> нажмите на одну из кнопок:</p> 

		<div class="btn-group" data-toggle="buttons">
		<label class="btn btn-primary no">
				<input type="radio" name="happy" id="happy2" value="2" >Нет, не доволен</label>
			<label class="btn btn-primary yes">
				<input type="radio" name="happy" id="happy1" value="1">Да, доволен</label>
						
		</div>
		<br /> <br />

		<div id = 'GEY' class="form-group">
			<label  for="nameInput">Что именно Вам не нравится в нашей Управляющей Компании (ЖЭУ) ?</label>
			<textarea class="form-control" id="nameInput" name="nameInput" rows="2"></textarea>
			
		</div>



<p><strong>Вам известно о незаконном пребывании сотрудников Управляющей Компании (ЖЭУ) в подвале нашего  дома и расходе энергии с их стороны? А также об их отказе оплачивать эти расходы и вносить в счет собственников жилья арендную плату?</strong></p> 

		<div class="btn-group" data-toggle="buttons">
		<label class="btn btn-primary">
				<input type="radio" name="arbitrariness" id="arbitrariness2" >Нет</label>
			<label class="btn btn-primary">
				<input type="radio" name="arbitrariness" id="arbitrariness1">Да, известно </label>
						
		</div>
		<br /> <br />


<p><strong>	Видите ли Вы необходимость сменить Управляющую Компанию (ЖЭУ)?</strong></p> 

		<div class="btn-group" data-toggle="buttons">
		<label class="btn btn-primary">
				<input type="radio" name="change" id="change1">Да, нужно сменить </label>
		<label class="btn btn-primary">
				<input type="radio" name="change" id="change2" >Нет, оставить прежнюю</label>	
		</div>
		<br /> <br />

<p><strong>	У Вас есть автомобиль? </strong></p> 

		<div class="btn-group" data-toggle="buttons">
		<label class="btn btn-primary yesCar">
				<input type="radio" name="haveCar" id="haveCar1">Да</label>
		<label class="btn btn-primary noCar">
				<input type="radio" name="haveCar" id="haveCar2" >Нет</label>	
		</div>
		<br /> <br />

<div id = 'carBloc'>
<div  class="form-group">
			<label  for="nameInput">Напишите довольны ли Вы ситуацией с парковками и Ваше предложение решения проблемы?</label>
			<textarea class="form-control" id="car" name="car" rows="2"></textarea>			
		</div>
<p><strong>	Нужен ли шлагбаум ? </strong></p> 

		<div class="btn-group" data-toggle="buttons">
		<label class="btn btn-primary">
				<input type="radio" name="turnpike" id="turnpike1">Да</label>
		<label class="btn btn-primary">
				<input type="radio" name="turnpike" id="turnpike2" >Нет</label>	
		</div>
		<br /> <br />

</div>

	<div class="form-group1">
		<div class="form-group">
			<label  for="nameInput">
				В какое время Вам удобно приходить на собрание собственников жилья?
			</label>
			<textarea class="form-control" id="nameInput" name="nameInput" placeholder="К примеру, могу в любой будний день с 20:00 до 22:00" rows="2"></textarea>
		</div>

		
		


		

		
		

		<button type="submit" id='submitForm' class="btn btn-primary bl-centr">Готово!</button>
	</div>

</form>