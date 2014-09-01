<?php
/* @var $this NewDbController */

$this->
breadcrumbs=array(
	'New Db',
);



?>
<h2 class="lobster">Заведение новых БД</h2> 
<p><a class="btn btn-primary btn-xs query" role="button" data-query="Homeowners">Собственники</a></p>
<p><a class="btn btn-primary btn-xs query" role="button" data-query="Unanswered">Отвеченные вопросы</a></p>
<p><a class="btn btn-primary btn-xs query" role="button" data-query="Answers">Ответы</a></p>




<!-- Подключение  моих плагинов  -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main_db.js"></script>