$(document).ready(function () {
  $(".plus").click(function (event) {
    $(this).toggleClass("active").next().slideToggle(300);
    // $('.question').parent().toggleClass('whitebg');
    $(this).closest(".question").toggleClass("whitebg");
  });
});

$(".menu-item").click(function () {
  // Тут класс твоей кнопки
  $(".sub-menu").slideToggle(300); // Тут класс твоего меню, предварительно оно "display:none"
});

$(".hum").click(function () {
  // Тут класс твоей кнопки
  $("ul.menu").toggleClass("mobmenu");
  $("ul.menu").slideToggle(300); // Тут класс твоего меню, предварительно оно "display:none"
});
