$(document).ready(function(){  
//alert('m3');



    $(function(){
	    $('#formLogin').submit(function(e){
		    //отменяем стандартное действие при отправке формы
		    e.preventDefault(); 
		    
		    //берем из формы метод передачи данных
		    var m_method=$(this).attr('method');
		    //получаем адрес скрипта на сервере, куда нужно отправить форму
		    var m_action=$(this).attr('action');
		    //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
		    //то есть в стандартном формате передачи данных формы
		    var m_data=$(this).serialize();
		    $.ajax({
			    type: m_method,
			    url: m_action  /*+'/2' */,
			    data: m_data			    
			    }).done(function( result ) {
			    	if (result == '') {document.location.href = '/questions';} else { $('#mySmallModalLabel').html(result); $('#myModal').modal();}
			    	
			        
			      //   if (result != 'error') {document.location.href = '/questions?first=1';	} else  {  $('#test_form').html('<p class="text-center">Такой телефон уже зарегистрирован. Пожалуйста позвоните администратору для решения этого вопроса. +7-952-944-38-87</p>')}
			         		
				}).fail(function(result) {
					alert('fail');
			    	//$('#test_form').html("нет ответа... Сообщите об ошибке на почту 380-00-63@mail.ru")
			    	
			    	})		    
		    
	    })
    });













	 
}); // $(document).ready /
