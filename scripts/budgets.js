		
		

function SearchBudget()
            { 
              var Budget = document.getElementById('Budget');
	          var BudgetId= Budget.options[Budget.selectedIndex].value;
			  
			 
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/do_search_budget.php',
	   data: 'BudgetId='+BudgetId,
       success:  function(data)
       {
		   
		   
			  
			document.getElementById("Tabledata").innerHTML=data;
		   
    
		
       }
   });
			  } 

function SearchEvents()
            { 
              var dept = document.getElementById('Department');
	          var DepartmentId= dept.options[dept.selectedIndex].value;
			  
			  var year = document.getElementById('budgetYear');
	          var yearId= year.options[year.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/do_search_events.php',
	   data: 'yearId='+yearId+'&DepartmentId='+DepartmentId,
       success:  function(data)
       {
		   
		   
			  
			document.getElementById("Tabledata").innerHTML=data;
		   
    
		
       }
   });
			  } 



			  
			  
			  function addBudget()
            { 
              var dept = document.getElementById('Department');
	          var DepartmentId= dept.options[dept.selectedIndex].value;
			  
			  var year = document.getElementById('budgetYear');
	          var yearId= year.options[year.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/addBudget.php',
	   data: 'yearId='+yearId+'&DepartmentId='+DepartmentId,
       success:  function(data)
       {
		   
		   
			  
			document.getElementById("responseID").innerHTML=data;
		   
    
		
       }
   });
			  }  
			  
	 
			  function addTimeManage()
            { 
              var dept = document.getElementById('Department');
	          var DepartmentId= dept.options[dept.selectedIndex].value;
			  
			  var year = document.getElementById('budgetYear');
	          var yearId= year.options[year.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/addTimeManage.php',
	   data: 'yearId='+yearId+'&DepartmentId='+DepartmentId,
       success:  function(data)
       {
		   
		   
			  
			document.getElementById("responseID").innerHTML=data;
		  
    
		
       }
   });
			  }  

function DeleteBudgetItem(line)
            { 
          
	          
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/delete_Budget_item.php',
	   data: 'Line='+line,
       success:  function(data)
       {
		 if(data.trim()=='success'){  
		   
			  SearchBudget();
			document.getElementById("responseID").innerHTML='<span class="alert alert-success">The Item has been Deleted</span>';
		   
    
		 }else{
			 document.getElementById("responseID").innerHTML='<span class="alert">'+data+'</span>';
			 
		 }
       }
   });
			  }    			  


			  function doidbudget(){
					 var budget_item=document.getElementById("Budget");
                     var budget_name= budget_item.options[budget_item.selectedIndex].text;
                      var budget_id= budget_item.options[budget_item.selectedIndex].value;
                      document.getElementById("budget_id_id").setAttribute('value',budget_name);
                   document.getElementById("budget_id").setAttribute('value',budget_id);

				}
			function addBudgetITtem()
            { 



              var Budget_id = document.getElementById('budget_id').value;
	       
			  
			  var Amount = document.getElementById('amount_budget').value;

			  var Description = document.getElementById('itemDescription').value;
	          console.log(Description);
	          console.log(Amount);
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/do_addBudget_item.php',
	   data: 'Budget_id='+Budget_id+'&Amount='+Amount+'&Description='+Description,
       success:  function(data)
       {
		  if(data.trim()=='success'){

             document.getElementById("response_budget_item").innerHTML='<span class="alert alert-success">The budget item has been added successfully </span>'
		  }else{
		  	document.getElementById("response_budget_item").innerHTML='<span class="alert alert-danger">The budget item has NOT been added due to some error </span>'
		  } 
		 
			  
			
		   
    
		
       }
   });
			  } 