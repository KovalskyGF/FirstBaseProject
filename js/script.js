$(document).ready(function () {
    $(".left-sidebar_object-sort span").click(function () {
        var id = $(this).attr('id'); //получает/устанавливает значение атрибута
        $("#left-sidebar_object-fon").css({'display':'block'});
        $("#left-sidebar_object-load").fadeIn(1000, function () {
            $.ajax({
              	url:'../index.php', //url страницы
              	data:'left-sidebar_object-sort_id='+id, //данные, присланные с сервера
              	type:'get', //метод отправки
              	success: function (html) {  //данные отправлены успешно
              		$(".content").html(html).hide().fadeIn(2000);
              		$("#fon").css({'display':'none'});
              	    $("#load").fadeOut(1000, function());
              	}
            })
        });  
    });
});