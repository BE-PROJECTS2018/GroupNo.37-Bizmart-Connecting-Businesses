<?php
session_start();
include('include/header.php');
session_unset('s_id'); 
session_unset('sub_name'); 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="admin.css">
<title>Add Records Form</title>
<p id="demo"></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script><!--dt-->
<!-- <script type="text/javascript" src="scripts/js/validations.js"></script> -->
<script type="text/javascript">
 function idForm(){
   var selectvalue = $('input[name=choice]:checked', '#idForm').val();
 

if(selectvalue == "test"){
window.open('main.php');
return true;
}
else if(selectvalue == "practise"){
window.open('practisequestion.php');
return true;
}
return false;
 };
</script>


</head>

<body>

<form id="idForm" action="set.php" method="post">
<div id="details">&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspInsert Subject_ID &nbsp&nbsp<input id="s_id" type="text"  name="sub_id" required><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspInsert Subject&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id="sub" type="text" name="sub" required><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSelect Choice  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="radio" id="choice1"  name="choice" value="test" required> Test
              <input type="radio" id="choice2"  name="choice" value="practise" required> Study<br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<center><input id="sub1"  onclick="idForm();" type="submit"  value="Submit"></center>
<a style="font-size:16px;float:right;" href="list.php" target="_blank"> Get Subject List 
</div>
</form>


</body>
</html>
