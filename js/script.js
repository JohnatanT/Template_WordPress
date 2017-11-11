// Botão de voltar ao topo
$('#top').click(function(){
    $('body,html').animate({
        scrollTop: 0
    },800);
});

$(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#top').fadeIn();
        }else{
            $('#top').fadeOut();
        }
});

//Gif de carregamento
$(document).ready(function(){
    //Esconde preloader
    $(window).load(function(){
        $('#loading').fadeOut(1500);//1500 é a duração do efeito (1.5 seg)
    });

});