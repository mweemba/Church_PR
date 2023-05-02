function getBudge_line(){
	var dept=document.getElementById("DepartmentID");
	 var departmentId= dept.options[dept.selectedIndex].value;
	var total;
	$.ajax({
		async: false,
       type: "POST",
       url: 'actions/do_get_budget_lines.php',
	   data:"departmentId="+departmentId,
       success:  function(data)
       {
   		 
			document.getElementById("Department_budgetLine").innerHTML=data;
		
		
         
       }
   });
 
return total;
}		