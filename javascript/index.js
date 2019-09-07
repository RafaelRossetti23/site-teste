$(function(){
   
    $('.toggle').click(function(){
        $('.layout').toggleClass('ativo')
        $('.menu-responsive').toggleClass('ativo')
        $(this).toggleClass('ativo')
    })
})