$(document).ready(function(){
    $('.plus').click(function(event){
        $(this).toggleClass('active').next().slideToggle(300);
        // $('.question').toggleClass('whitebg').next().slideToggle(300);
        // if($(this).hasClass('active')){
        //     $('.question').toggleClass('whitebg').next().slideToggle(300);
        // } else {
        //     $('.question').toggleClass('whitebg').next().slideToggle(300);
        // }
    });
    // $('.plus').click(function(event){
    //     $('.question').toggleClass('whitebg').next().slideToggle(300);
    // });
})