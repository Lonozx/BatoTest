$(document).ready(function(){
    $('.plus').click(function(event){
        $(this).toggleClass('active').next().slideToggle(300);
        // $('.question').parent().toggleClass('whitebg');
        $(this).closest('.question').toggleClass('whitebg');
    });
    
})