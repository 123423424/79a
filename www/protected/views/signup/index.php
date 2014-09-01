<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);



?>
	

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main_singup.js"></script>
<div id="test_form" class="lead red"></div>

<form id='formSingup'  method="post" action="/chekSingup" role="form"> 

    
    <div class="form-group1">
    <div class="form-group">
        <label  for="nameInput">Имя:</label>
        <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Введите Ваше имя"/>
        <p class="bg-danger padding10">Должны быть только буквы</p>
    </div>
    
    <div class="form-group">
        <label for="surnameInput">Фамилия:</label>
        <input type="text" class="form-control" id="surnameInput"  name="surnameInput" placeholder="Введите Вашу фамилию"/>
        <p class="bg-danger padding10">Должны быть только буквы</p>
    </div>
    
    <div class="form-group">
        <label for="patronymicInput">Отчество:</label>
        <input type="text" class="form-control" id="patronymicInput" name="patronymicInput"  placeholder="Введите Ваше отчество"/>
        <p class="bg-danger padding10">Должны быть только буквы</p>
    </div>
    </div>
    
    
    <div class="form-group2">
    <div class="form-group">
        <label for="roomInput">Номер квартиры:</label>
        <input type="text" class="form-control" id="roomInput" name="roomInput"  placeholder="Введите номер квартиры"/>
        <p class="bg-danger padding10">Должны быть только буквы</p>
    </div>
    
    <div class="form-group">
        <label for="telephoneInput">Телефон:</label>  
        <input type="text" class="form-control telephone" id="telephoneInput"  name="telephoneInput"  placeholder="Введите контактный телефон"/>
        <p class="bg-danger padding10">Должны быть числом</p>
    </div>
    
    <div class="form-group">
        <label for="mailInput">Почта (email):</label>
        <input type="email" class="form-control" id="mailInput"  name="mailInput"  placeholder="Введите Вашу почту"/>
        <p id='name_mail_name-mass' class="bg-danger padding10">Должны быть только буквы</p>
    </div>
    
    <div class="form-group">
        <label for="passwordInput">Пароль для входа (введите цифры или латинские буквы от A до Z:</label>
        <input type="password" class="form-control" id="passwordInput"  name="passwordInput"  placeholder="Запомните свой пароль"/>
        <p class="bg-danger padding10">Не допустимый пароль</p>
    </div>
    
    <button type="submit" id='submitForm' class="btn btn-primary bl-centr">Готово!</button>
    </div>

  
</form>

