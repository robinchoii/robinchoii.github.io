$(document).ready(function () {
  $(".projects").mouseover(function() {
    $(this).css("opacity", ".5")
  });
  $(".projects").mouseout(function() {
    $(this).css("opacity", "1")
  });

  $('img.img-thumbnail')
  .wrap('<span style="display:inline-block"></span>')
  .css('display', 'block')
  .parent()
  .zoom();

  $('#submit').click(function() {
    alert("Thank you for connecting!")
  });

  $("#nav-portfolio").click(function() {
    $('html,body').animate({
      scrollTop: $("#portfolio").offset().top},
      'slow');
  });
  $("#nav-about").click(function() {
    $('html,body').animate({
      scrollTop: $("#about").offset().top},
      'slow');
  });
  $("#nav-connect").click(function() {
    $('html,body').animate({
      scrollTop: $("#connect").offset().top},
      'slow');
  });
  $("#nav-top").click(function() {
    $('html,body').animate({
      scrollTop: $("#page-top").offset().top},
      'slow');
  });


});