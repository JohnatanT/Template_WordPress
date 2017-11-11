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