 
$(document).ready(function() {
  $('#loginform').submit(function(e) {
  var username=document.getElementById("username").value;
 var password=document.getElementById("password1").value;
    e.preventDefault();
	// ;
    $.ajax({
       type: "POST",
       url: 'action/do_login.php',
       data: "username="+username+"&password="+password,
       success: function(data)
       {
          if (data.trim() === 'success') {
          
		   window.location = 'index.php';
			
          }
          else {
		  
			document.getElementById("loginResponse").innerHTML='<div class=alert alert-danger">'+data+'</div>';
			
          }
       }
   });
 });
  $('#id-message-form').submit(function(e) {
  var reciepient=document.getElementById("form-field-recipient").innerHTML;
 var subject=document.getElementById("form-field-subject").value;
 var message=document.getElementById("message_id").innerHTML;
 var value=document.getElementByName("attachment[]").value;
    e.preventDefault();
	// ;
    $.ajax({
       type: "POST",
       url: 'action/do_login.php',
       data: "username="+username+"&password="+password,
       success: function(data)
       {
          if (data.trim() === 'success') {
          
		   window.location = 'index.php';
			
          }
          else {
		  
			document.getElementById("loginResponse").innerHTML='<div class=alert alert-danger">'+data+'</div>';
			
          }
       }
   });
 });
 
 
 
});
