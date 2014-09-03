<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main_forum.js"></script>
<div class="row">

	<div class="col-md-6">
		<p class="lead">
			Тут Вы можете открыть любую тему для обсуждения и она будет рассмотрена собственниками жилья. <br /> А также Ваши предложения и идеи по улучшению сайта.
		</p>

	</div>
	<div class="col-md-6">
		

<div id="mess">
<p class="bg-success text-center lead">Новая тема заведена и проходит модерацию администратора.</p>

 <button id="new" class="btn btn-primary bl-centr" type="submit">Отправить еще одну тему</button> <br />
</div>


		<form id='formForum'  method="post" action="/Ajaxmess/Forum" role="form"> 

			

			<div class="col-md-10">
				<div class="form-group">
					<textarea class="form-control" id="problems" name="topic" rows="3" placeholder="К примеру: 'Когда уберут металлические гаражи с детской площадки?'"></textarea>
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group">
					<button type="submit" id='submitForm' class="btn btn-primary bl-centr">Открыть тему</button>
				</div>
			</div>

		</form>

	</div>
</div>
<div id="test_form"></div>


<!--  <hr />
<p class="lead">Актуальные темы: </p> -->