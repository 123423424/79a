$(document).ready(function(){  
    // $(".statys").click(function(){ }       
      //alert('');

//Отправка запроса на создания БД
/*
    $('.query').click(function(){ 
       var str= $(this).data('query');
       var mess='Готово';
    $.ajax({
	type: "POST",
	url: 'Ajax/'+str,
	 //,	data: { name: geo }
	}).done(function(msg) {  
	       $('.query').filter(function() { return  $(this).data('query') == str; }).html(msg); 			
	}) .fail(function() {  
	    $('.query').filter(function() { return  $(this).data('query') == str; }).html('error');
    });
});    
*/

$('.btn').button();

$(".no").click(function(){
    $('#GEY').show("slow");	
});

$(".yes").click(function(){
    $('#GEY').hide("slow");	
});


$(".yesCar").click(function(){
    $('#carBloc').show("slow");	
});

$(".noCar").click(function(){
    $('#carBloc').hide("slow");	
});

	
	//$('#GEY').show("slow");












	 
}); // $(document).ready /
