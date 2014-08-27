$(document).ready(function(){  
//alert('m2');

var chFormI = 2; //общая проверка формы 2-можно , 3-запрет

function chekForm (name, ch){

  if (ch === undefined) {
    ch = 1;
  }




	if (name.val() =='') { 
			name.next().show("slow");
			name.parent() .addClass('has-error');	
			if (ch==2)	{chFormI=3;}	 
		 }	else {
		 	name.next().hide("slow");
		 	name.parent() .removeClass('has-error');
		 }

}

//ячейки первой части формы при изменении пусты
$('.form-group1').find('input').change(function() {
		chekForm ($( this ));
});
//ячейки первой части формы при потери фокуса пусты
$('.form-group1').find('input').focusout(function() {
		chekForm ($( this ));
});

//ячейки первой части формы при изменении пусты
$('.form-group2').find('input').change(function() {
		chekForm ($( this ));
});
//ячейки первой части формы при потери фокуса пусты
$('.form-group2').find('input').focusout(function() {
		chekForm ($( this ));
});


//ячейка Фамилия  при потери фокуса открывает вторую часть
$('#surnameInput').focusout(function() {
		if ($( this ).val() !='') { 
			$('.form-group2').show("slow");
		}
});


      $('#mailInput').blur(function() {
        if($(this).val() != '') {

          var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

          if(pattern.test($(this).val())){            
            $('#name_mail_name-mass').hide("slow");
          } else {
            $('#name_mail_name-mass').html('Проверьте и укажите точный Ваш email').show("slow");
          }
        } else {
          $('#name_mail_name-mass').html('Поле email не должно быть пустым').show("slow");          
        }
      });
  


    $(function(){
	    $('#formSingup').submit(function(e){
		    //отменяем стандартное действие при отправке формы
		    e.preventDefault();

		    //Проверка формы
		    chFormI = 2;
			$('#formSingup').find('input').each( function() {
				 chekForm ($( this ) , 2);	
			});

		    if (chFormI==2) {
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
			        // $('#test_form').html(result)
			         document.location.href = '/questions?first=1';			
				}).fail(function(result) {
			    	$('#test_form').html("нет ответа... Сообщите об ошибке на почту 380-00-63@mail.ru")
			    	})		    
		    }
	    })
    });













	 
}); // $(document).ready /
