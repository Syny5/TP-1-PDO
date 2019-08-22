$('#scrollUp').css('opacity','0');
$(function () {
    //lorsque l'on clique sur le bouton scroll up, on remonte en haut de l'ecran
    $('#scrollUp').click(function(){
        $("html, body").animate({scrollTop: 0}, 300);       
    });
    $(window).scroll(function(){
        if ( $(window).scrollTop() >100 ){
            $('#scrollUp').css('opacity','.5');
        }else{
            $('#scrollUp').css('opacity','0');
        }
    });
});