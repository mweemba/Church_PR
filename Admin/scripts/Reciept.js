  // add Ro
  
                  var rIndex,
                table = document.getElementById("table");
            function addHtmlTableRow()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                // set the values into row cell's
               
                var newRow = table.insertRow(table.length);
                    
					var member1 = document.getElementById('member');
              	var member1d= member1.options[member1.selectedIndex].value;
				var membername= member1.options[member1.selectedIndex].text;

                   var category = document.getElementById('Category');
	          var cateogryId= category.options[category.selectedIndex].value;

	          var cateogryName= category.options[category.selectedIndex].text;


             var type = document.getElementById('Type');
	          var Type_id= type.options[type.selectedIndex].value;
	          var typename= type.options[type.selectedIndex].text;

	          var entity_recieving;
	          var entity_recieving_id;
              if(document.getElementById('Account_id')!==null){
              
              var dpt1 = document.getElementById('Account_id');
	          var dept= dpt1.options[dpt1.selectedIndex].text;
	          var dept_id= dpt1.options[dpt1.selectedIndex].value;
	          entity_recieving=dept;
	          var entity_recieving_id=dept_id;
	           var Sub = document.getElementById('sub_account');
	           var sub_1= Sub.options[Sub.selectedIndex].value;
	           var sub_name= Sub.options[Sub.selectedIndex].text;
              }else{

              	entity_recieving_id=Type_id;
              }

                  var amount = document.getElementById("amount").value;
				  console.log(amount);
              var nararion = document.getElementById("naration").value;
			  
	          
	           if(!member1d || !cateogryId || !Type_id || !amount || !nararion ){
	           	
document.getElementById("ResponseMesage").innerHTML='<div class="alert alert-danger">Some Fields are missing data</div>';	
		  
}
	           

else{

document.getElementById("ResponseMesage").innerHTML='';
          
			  $.ajax({
       type: 'POST',
	   cache:false,
       url: 'actions/do_reciept-item.php',
	   data: 'member1='+member1d+'&cateogryId='+cateogryId+'&acc_number='+entity_recieving_id+"&sub_accoun_number="+sub_1+'&amount='+amount+'&narariont='+nararion+'&Type_id='+Type_id,
       success:  function(data)
       {
		   if(data.trim()=='success'){
		   
			 var cell1 = newRow.insertCell(0);
              var cell2 = newRow.insertCell(1);
               var cell3 = newRow.insertCell(2);
			   var cell4 = newRow.insertCell(3);
			   var cell5 = newRow.insertCell(4);
			   var cell6 = newRow.insertCell(5);
			   var cell7 = newRow.insertCell(6);
			   
                cell1.innerHTML = membername;
                cell2.innerHTML = cateogryName+'-'+dept;
                cell3.innerHTML = typename;
				cell4.innerHTML = amount;
				cell5.innerHTML = nararion;
				cell6.innerHTML=entity_recieving+'-'+sub_name;
				cell7.innerHTML='<div class="hidden-sm hidden-xs action-buttons"><a class="blue" href="#"><i class="ace-icon fa fa-search-plus bigger-130"></i></a><a class="green" href="#"><i class="ace-icon fa fa-pencil bigger-130"></i></a><a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-130"></i></a></div>';
                // call the function to set the event to the new row
              //  selectedRowToInput();
		   
		   
		   }  else{
			  console.log(data);
			document.getElementById("ResponseMesage").innerHTML='<div class="alert alert-danger">'+data+'</div>';	    
		   }
    
		
       }
   });
			  }  

			  }    
            
            
			
			  function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("fname").value = this.cells[0].innerHTML;
                      document.getElementById("lname").value = this.cells[1].innerHTML;
                      document.getElementById("age").value = this.cells[2].innerHTML;
                    };
                }

            }

          
            
          //  selectedRowToInput();
		  
		  
		  
		  
		  function selectType(){ 
			  var fundtype = document.getElementById('Type');
              	var funid= fundtype.options[fundtype.selectedIndex].value;
				if(funid==5){
				
			   $.ajax({
       type: 'POST',
       url: 'actions/do_select_giving_type.php',
	   data: 'type='+funid,
       success:  function(data)
       {
		document.getElementById("department_place").innerHTML=data;
		   
	   }
		  });
		  
		  
		  }
		 
			 
		  }	

		    function selectCategory(){ 
			  var Category = document.getElementById('Category');
              	var Cate_id= Category.options[Category.selectedIndex].value;
				
				
			   $.ajax({
       type: 'POST',
       url: 'actions/do_select_giving_cat.php',
	   data: 'Cate_id='+Cate_id,
       success:  function(data)
       {
		document.getElementById("Type").innerHTML=data;
		   
	   }
		  });
		  
		  
		  
			 
		  }			 
		

		    function find_sub_accounts(){ 
			  var Acc = document.getElementById('Account_id');
              	var account_id= Acc.options[Acc.selectedIndex].value;
              	console.log(account_id);
				
				
			   $.ajax({
       type: 'POST',
       url: 'actions/do_sub_accounts_list.php',
	   data: 'account_id='+account_id,
       success:  function(data)
       {
       	console.log(data);
		document.getElementById("sub_account").innerHTML=data;
		   
	   }
		  });
		  
		  
		  
			 
		  }			 