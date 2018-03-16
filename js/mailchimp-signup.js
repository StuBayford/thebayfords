//MAILCHIMP FORM SUBMISSION
(function ($) {
  $(document).ready(function(){
    $("#form-subscribe").on("submit", function(event) {
      
      //prevent the form from submitting via the browser redirect
      event.preventDefault();
          
      //grab attributes and values out of the form
      var email = $('#email').val();
      var status = $('#status').val();
      var spam = $('#spam').val();

      if (spam == '') {
          
        //make the ajax request
        $.ajax({
          method: 'POST',
          dataType: 'json',
          url: '/wp-admin/admin-ajax.php',
          data: {
            action: 'form_subscribe',
            email: email,
            status: status
          },
          success: function(data) {
            var obj = JSON.parse(data);
            // console.log(obj);
            if(obj.id){
              //successful adds will have an id attribute on the object
              Subscribe_Form_Success();
            } else if (obj.title == 'Member Exists') {
              //MC wil send back an error object with "Member Exists" as the title
              Subscribe_Submit_Message(false, "Thanks, but you're already signed up!");
            } else {
              //something went wrong with the API call
              Subscribe_Submit_Message(false, "Oh no, there's been a problem!");
            }
          },
          error:
            // function(xhr, status, error) {
            // Subscribe_Submit_Message(false, "error: "+status+", "+error);
            // console.log(xhr);
            function($result) {
              Subscribe_Submit_Message(false, "Oh no, there's been an error");
          }
        });
      }
    });

    function Subscribe_Form_Success(){
      var email = $('#email').val();
      var email = $('#email').val();
      email = email.toLowerCase();
      // var u = '';
      // var preferences_url = 'https://thebayfords.us17.list-manage.com/profile/?u='+u+'&id='+list_id+'&e=47893a05a4';
      
      Subscribe_Submit_Message(true, "Thank you for subscribing!");  //Almost done - please complete the confirmation email.
      $("#form-subscribe")[0].reset();
    }

    function Subscribe_Submit_Message(valid, message){
      var messageClasses = "message container alert alert-dismissable fade";
      var statusClasses = "input-group";
      console.log("Subscribe " + message);

      if (valid) {
        messageClasses += " alert-success show";
        statusClasses += " success";
      } else {
        messageClasses += " alert-danger show";
        statusClasses += " error";
      }

      $("#form-subscribe-message").removeClass().addClass(messageClasses);
      $("#form-subscribe-message-text").text(message);
    }
  });
}(jQuery));