function sendComment()
            { 
			var sermonID = document.getElementById('SID').value;
              var name = document.getElementById('name').value;
	          var email= document.getElementById('email').value;
			  
			  
			  var comment = document.getElementById('comment').value;
	         
	          
			  $.ajax({
       type: 'POST',
       url: 'Sermon_comment.php',
	   data: 'name='+name+'&email='+email+'&comment='+comment+'&SID='+sermonID,
       success:  function(data)
       {
		   
		   
			  
			document.getElementById("commentdata").innerHTML=data;
		   
    
		
       }
   });
			  } 