$(window).on("scroll load resize",function(){
  var ws = $(this).scrollTop();
  if(ws >= 300){
    $(".reserve-card").addClass('left-hide');
    $("header").addClass("slim");
  }else{
    //$(".reserve-card").removeClass('left-hide');
    $("header").removeClass('slim');
  }
});

$(function(){
  $(window).on("scroll load resize",function (){
    $('.fadein').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = window.innerHeight;
      if (scroll > elemPos - windowHeight + 100){
        $(this).addClass('scrollin');
      }
    });
  });
  $(window).scroll();
});

var scrollElm = (function() {
  if('scrollingElement' in document) {
    return document.scrollingElement;
  }
  if(navigator.userAgent.indexOf('WebKit') != -1) {
    return document.body;
  }
  return document.documentElement;
})();

$(document).on('click','a[href^="#"]', function() {
  var speed = 800;
  var href= $(this).attr("href");
  var wh = $(href == "#" ? 'html' : href).offset().top;
  $(scrollElm).animate({
    scrollTop:wh
  }, speed);
  return false;
});

$(document).on('click','.rec-toggle',function(){
  $(this).toggleClass("rec-toggle-in");
  $(this).next('article').slideToggle(500);
});

$("button.nav-toggle").on("click",function(){
  $("header").toggleClass('toggle-in');
  $(this).parent('section').toggleClass('close');
});

$(".reserve-card").mouseover(function(){
  if($(this).hasClass('left-hide')){
    $(this).removeClass('left-hide');
  }
});
$(".reserve-card").mouseleave(function() {
  if(!$(this).hasClass('left-hide') && $(window).scrollTop() >= 300){
    $(this).addClass('left-hide');
  }
});
$(".reserve-card .toggle-img").on("click",function(){
  $(".reserve-card").addClass('left-hide');
});
