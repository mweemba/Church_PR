
function financialReports()
            { 
              var startDate = document.getElementById('startday').value;
	          
			  var Endday = document.getElementById('endday').value;
	          var Dept=  document.getElementById('Department');
			  var Department= Dept.options[Dept.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/search_reports.php',
	   data: 'startDate='+startDate+'&Endday='+Endday+'&Department='+Department,
       success:  function(data)
       {
		   
		 
			  
			document.getElementById("incomestatement").innerHTML=data;
		   
    
		
       }
   });
			  } 

			  function financialReports2()
            { 
              var startDate = document.getElementById('startday').value;
	          
			  var Endday = document.getElementById('endday').value;
	          var Dept=  document.getElementById('Department');
			  var Department= Dept.options[Dept.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/search_reports2.php',
	   data: 'startDate='+startDate+'&Endday='+Endday+'&Department='+Department,
       success:  function(data)
       {
		   
		 
			  
			document.getElementById("incomestatement").innerHTML=data;
		   
    
		
       }
   });
			  }
	