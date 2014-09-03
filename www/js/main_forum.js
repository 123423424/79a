$(document).ready(function(){  
    // $(".statys").click(function(){ }       
      //alert('');



    $(function(){
      $('#formForum').submit(function(e){
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
             // alert(result);
              $('#formForum').hide(0); 
              $('#mess').show("slow");  

        }).fail(function(result) {
            $('#test_form').html("нет ответа... Сообщите об ошибке на почту 380-00-63@mail.ru")
            })        
        
      })
    });


$('#new').click(function(){
  $('#mess').hide(0); 
  $('#formForum').show("slow"); 

 })














   
}); // $(document).ready /
