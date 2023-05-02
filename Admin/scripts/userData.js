function userFinance()
            { 
              var Month1 = document.getElementById('Month');
	          var Month= Month1.options[Month1.selectedIndex].value;
			  
			  var year = document.getElementById('Year');
	          var yearId= year.options[year.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'do_userfinance.php',
	   data: 'yearId='+yearId+'&Month='+Month,
       success:  function(data)
       {
		   
		 
			  
			document.getElementById("Tabledata").innerHTML=data;
		   
    
		
       }
   });
			  } 

