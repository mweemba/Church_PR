function adduser(){

	var member1 = document.getElementById('member');
              	var member1d= member1.options[member1.selectedIndex].value;
var username = document.getElementById("username").value;
var pass = document.getElementById("password1").value;

var email = document.getElementById("email").value;
var cat = document.getElementById("Category");
var Category= cat.options[cat.selectedIndex].value;
var Type= cat.options[cat.selectedIndex].text;
//console.log(languagefrom);

$.ajax 
({ 
type:'post',
 url:'actions/do_add_user.php',
  data: 'member1='+member1d+'&cateogryId='+Category+'&email='+email+'&pass='+pass+'&username='+username+'&Type='+Type, 
success:  function(data){
       if(data.trim()=="success"){
document.getElementById("responseID").innerHTML= '<div class="alert alert-success">The user was created successfully<div>';

 } 
 else{ 
 
document.getElementById("responseID").innerHTML= '<div class="alert alert-danger">'+data+'<div>'; 


 } 
 
}

  }); 
  
  }
 

 function edituser(){

	var member1 = document.getElementById('member');
              	var member1d= member1.options[member1.selectedIndex].value;


var email = document.getElementById("email").value;
var cat = document.getElementById("Category");
var Category= cat.options[cat.selectedIndex].value;
var Type= cat.options[cat.selectedIndex].text;
//console.log(languagefrom);
var act = document.getElementById("active");
var active= act.options[act.selectedIndex].value;
$.ajax 
({ 
type:'post',
 url:'actions/do_edit_user.php',
  data: 'member1='+member1d+'&cateogryId='+Category+'&email='+email+'&Type='+Type+'&active='+active, 
success:  function(data){
       if(data.trim()=="success"){
document.getElementById("responseID").innerHTML= '<div class="alert alert-success">The user was edited successfully<div>';

 } 
 else{ 
 
document.getElementById("responseID").innerHTML= '<div class="alert alert-danger">'+data+'<div>'; 


 } 
 
}

  }); 
  
  }

function auth(){

var pass = document.getElementById("password").value;
var user = document.getElementById("username").value;
//console.log(languagefrom);

$.ajax 
({ 
type:'post',
 url:'process_login.php',
 data:{ 
 edit_row:'auth',
 password:pass,
 username:user, 

 }, 
success:function(response) { if(response=="success   ")
{ 
//document.getElementById(wordid).disabled = true;
 //document.getElementById("edit_button"+id).style.display="block";
//document.getElementById().style.display="none"; 
document.getElementById("responseID").innerHTML= '<div class="alert alert-success">The user was deleted successfully<div>';

 } 
 else{ 
 
document.getElementById("responseID").innerHTML= '<div class="alert alert-danger">The user was deleted successfully<div>';


 } 
 
 

 } }); } 
 
 	function ConfirmDelete(id)
{
 if(confirm("Are you sure you want to delete this user?")){
	 
	$.ajax 
({ 
type:'post',
 url:'actions/delete_user.php',
 data:{ 
 userid:id,
 }, 
success:function(response) { if(response.trim()=='success')
{ 
document.getElementById("responseID").innerHTML= '<div class="alert alert-success">The user was deleted successfully<div>';

 } 
 else{ 
 
 document.getElementById("responseID").innerHTML='<div class="alert alert-danger">'+response+' <div>'; 
 //document.getElementById("edit_button"+id).style.display="block";
//document.getElementById().style.display="none"; 


 } 
 }
  
  
 })
 
 }
}

