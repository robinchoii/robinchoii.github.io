$(document).ready(function() {
  // alert('ready')
  $("#popoutbutton").click(function() {
    $(".popout ul").toggle(500)
  })
  $(".question").click(function() {
    $(this).siblings().toggle(300);
  })

});
