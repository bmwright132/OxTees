$(document).ready(function() {
  $('#login').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: '../loginMessage.php',
       data: $(this).serialize(),
       success: function(data)
       {
          if (data === 'Login') {
            alert('Signed in');
          }
          else {
            alert('Invalid Credentials');
          }
       }
   });
 });
});