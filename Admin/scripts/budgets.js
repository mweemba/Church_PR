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


			  function SearchForBudget(){

			  	
              var Year1 = document.getElementById('budget_year');
	          var year= Year1.options[Year1.selectedIndex].value;
	         
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/do_search_budget_budget.php',
	   data: 'year='+year,
       success:  function(data)
       {
		   
		   
			  
			document.getElementById("budgets_list").innerHTML=data;
		   
    
		
       }
   });
			  }

			   function changebudgetline(){
			   	changeobjectivelist();

			  	
              var Department = document.getElementById('Dept_id');
	          var DepartmentId= Department.options[Department.selectedIndex].value;

	          var Year1 = document.getElementById('yearNo');
	          var year= Year1.options[Year1.selectedIndex].value;
	         console.log("we are here");
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/budget_line_list.php',
	   data: 'year='+year+"&DepartmentId="+DepartmentId,
       success:  function(data)
       {
		   
		   
			  
			document.getElementById("budgets_lines_1").innerHTML=data;
		   
                
		
       }
   });
			  }


function changeobjectivelist(){

			  	
              var Department = document.getElementById('Dept_id');
	          var DepartmentId= Department.options[Department.selectedIndex].value;

	          var Year1 = document.getElementById('yearNo');
	          var year= Year1.options[Year1.selectedIndex].value;
	         console.log("we are here");
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/objective_list.php',
	   data: 'year='+year+"&DepartmentId="+DepartmentId,
       success:  function(data)
       {
		   
		   console.log(data);
		   
			  
			document.getElementById("objective_list").innerHTML=data;
		   
                
		
       }
   });
			  }


	function EditBudgetItem(itemID){

document.getElementById("Budget").value=itemID;
 
$.ajax({
       type: 'POST',
       url: 'actions/so_edit_budget_item_data.php',
	   data: 'itemID='+itemID,
       success:  function(data)
       {

             document.getElementById("Editdata").innerHTML=data;
            
		
       }
   });

  $('#EditBudgetItem_form').modal();

	}


	function EditBudgetItem_act(){


var itemID=document.getElementById("budget_id_2").value;

var Amount=document.getElementById("itemAmount").value;
var Description=document.getElementById("itemDescriptio_1").value;
  	

$.ajax({
       type: 'POST',
       url: 'actions/do_EditBudget_item.php',
	   data: 'itemID='+itemID+'&Description='+Description+'&Amount='+Amount,
       success:  function(data)
       {
       	console.log(data);
       	if(data.trim()=='success'){

       		 document.getElementById("response_budget_item_edit").innerHTML='<span class="alert alert-success">The budget item has been added successfully </span>';
       		 SearchBudget();
       	}else{


       		document.getElementById("response_budget_item_edit").innerHTML='<span class="alert alert-danger">The budget item has NOT been added due to some error </span>';
       	}

             
            
		
       }
   });
  

	}




			  function AddBudgetItem(){
  
              var Budget_id = document.getElementById('budget_id').value;
	       
			  
			  var Amount = document.getElementById('amount_budget').value;

			  var Description = document.getElementById('itemDescription').value;
	       
	          console.log(Description);
	          console.log(Amount)
			  $.ajax({
       type: 'POST',
       url: 'actions/do_addBudget_item.php',
	   data: 'Budget_id='+Budget_id+'&Amount='+Amount+'&Description='+Description,
       success:  function(data)
       {

		  if(data.trim()=='success'){

             document.getElementById("response_budget_item").innerHTML='<span class="alert alert-success">The budget item has been added successfully </span>';
             SearchBudget();
		  }else{
		  	document.getElementById("response_budget_item").innerHTML='<span class="alert alert-danger">The budget item has NOT been added due to some error </span>';
		  } 
		 
			  
			
		   
    
		
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


	  function EditBudget()
            { 
              var dept = document.getElementById('Department_selected');
	          var DepartmentId= dept.options[dept.selectedIndex].value;
			  
			  var year = document.getElementById('budget_year_selected');
	          var yearId= year.options[year.selectedIndex].value;

	        var Budget_id = document.getElementById("Budget_id_edit_budget").value;
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/EditBudget.php',
	   data: 'yearId='+yearId+'&DepartmentId='+DepartmentId+'&Budget_id='+Budget_id,
       success:  function(data)
       {
		   
		   
			console.log(data);  
			document.getElementById("response_budget_edit").innerHTML=data;
		   
    
		
       }
   });
			  }
			  
			  
			  function addBudget()
            { 
              var dept = document.getElementById('Department_2');
	          var DepartmentId= dept.options[dept.selectedIndex].value;
			  
			  var year = document.getElementById('budget_year_2');
	          var yearId= year.options[year.selectedIndex].value;
	          
			  $.ajax({
       type: 'POST',
       url: 'actions/addBudget.php',
	   data: 'yearId='+yearId+'&DepartmentId='+DepartmentId,
       success:  function(data)
       {
		   
		   
			  
			document.getElementById("response_budget_new").innerHTML=data;
		   
    
		
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
			document.getElementById("responseID").innerHTML='<span class="alert alert-success" >The Item has been Deleted</span>';
		   
    
		 }else{
			 document.getElementById("responseID").innerHTML='<span class="alert">'+data+'</span>';
			 
		 }
       }
   });
			  }    			  