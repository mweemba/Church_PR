function userFinance()
            { 
			
              var Month1 = document.getElementById('Month');
	          var Month= Month1.options[Month1.selectedIndex].value;
			  
			  var year1 = document.getElementById('Year');
	          var yearId= year1.options[year1.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'action/do_user_finance.php',
	   data: 'Year='+yearId+'&Month='+Month,
       success:  function(data)
       {
		   if(data.trim()==0)
		   {
			   
			   document.getElementById("response").innerHTML='<div class="alert alert-error"> There is no data for your selection</div>';
			   document.getElementById("Tabledata").innerHTML='';
		   }
			else{  
			document.getElementById("Tabledata").innerHTML=data;
		    document.getElementById("response").innerHTML='';
			}
		
       }
	   
	   
   });
   
			  
			  } 

function userEvents()
            { 
              var Month1 = document.getElementById('Month');
	          var Month= Month1.options[Month1.selectedIndex].value;
			  
			  var year1 = document.getElementById('Year');
	          var yearId= year1.options[year1.selectedIndex].value;
			  
			  var dept1 = document.getElementById('dept');
	          var deptId= dept1.options[dept1.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'action/do_user_events.php',
	   data: 'Year='+yearId+'&Month='+Month+'&deptId='+deptId,
       success:  function(data)
       {
		   
		 
		if(data.trim()==0)
		   {
			   
			   document.getElementById("response").innerHTML='<div class="alert alert-error"> There is no data for your selection</div>';
			   document.getElementById("Tabledata").innerHTML='';
		   }
			else{  
			document.getElementById("Tabledata").innerHTML=data;
		    document.getElementById("response").innerHTML='';
			}
		   
    
		
       }
   });
			  } 
			  
			  function userLeaders()
            { 
             
			  
			  var year1 = document.getElementById('Year');
	          var yearId= year1.options[year1.selectedIndex].value;
			  
			  var dept1 = document.getElementById('dept');
	          var deptId= dept1.options[dept1.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'action/do_Leader.php',
	   data: 'Year='+yearId+'&deptId='+deptId,
       success:  function(data)
       {
		   
		 
		if(data.trim()==0)
		   {
			   
			   document.getElementById("response").innerHTML='<div class="alert alert-error"> There is no data for your selection</div>';
			   document.getElementById("Tabledata").innerHTML='';
		   }
			else{  
			document.getElementById("Tabledata").innerHTML=data;
		    document.getElementById("response").innerHTML='';
			}
		   
    
		
       }
   });
			  }
			  
			  
			   function userLBudget()
            { 
             
			  
			  var year1 = document.getElementById('Year');
	          var yearId= year1.options[year1.selectedIndex].value;
			  
		
	          
			  $.ajax({
       type: 'POST',
       url: 'action/do_Budget.php',
	   data: 'Year='+yearId,
       success:  function(data)
       {
		   
		 
		if(data.trim()==0)
		   {
			   
			   document.getElementById("response").innerHTML='<div class="alert alert-error"> There is no data for your selection</div>';
			   document.getElementById("Tabledata").innerHTML='';
		   }
			else{  
			document.getElementById("Tabledata").innerHTML=data;
		    document.getElementById("response").innerHTML='';
			}
		   
    
		
       }
   });
			  }

			  function userprayer()
            { 
              var Month1 = document.getElementById('Month');
	          var Month= Month1.options[Month1.selectedIndex].value;
			  
			  var year1 = document.getElementById('Year');
	          var yearId= year1.options[year1.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'action/do_user_prayer.php',
	   data: 'Year='+yearId+'&Month='+Month,
       success:  function(data)
       {
			if(data.trim()==0)
		   {
			   
			   document.getElementById("response").innerHTML='<div class="alert alert-error"> There is no data for your selection</div>';
			   document.getElementById("Tabledata").innerHTML='';
		   }
			else{  
			document.getElementById("Tabledata").innerHTML=data;
		    document.getElementById("response").innerHTML='';
			}
    
		
       }
   });
			  } 