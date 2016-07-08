$(document).ready(function () {
  var $contactForm = $(".contactForm");
  $contactForm.submit(function(e) {
    e.preventDefault();
    $.ajax({
      url: "https://formspree.io/robinchoii@gmail.com",
      method: "POST",
      data: $(this).serialize(),
      dataType: "json",
      beforeSend: function() {
        $contactForm.append("<div class='alert alert-loading'>Sending message...</div>");
      },
      success: function(data) {
        $contactForm.find('.alert-loading').hide();
        $contactForm.append("<div class='alert alert-success'>Message sent!</div>");
      },
      error: function(data) {
        $contactForm.find('.alert-loading').hide();
        $contactForm.append("<div class='alert alert-error'>Oops, there was an error.</div>");
      }
    });
  });
});