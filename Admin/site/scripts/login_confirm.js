 
$(document).ready(function() {
  $('#loginform').submit(function(e) {
  var username=document.getElementById("username").value;
 var password=document.getElementById("password1").value;
    e.preventDefault();
	// ;
    $.ajax({
       type: "POST",
       url: 'do_login.php',
       data: "username="+username+"&password="+password,
       success: function(data)
       {
          if (data.trim() === 'success') {
          
		   window.location = 'UserProfile.php';
			
          }
          else {
		  console.log(data);
			document.getElementById("loginresponse").innerHTML="<font color='Red'>"+data+"</font>";
			
          }
       }
   });
 });
});
