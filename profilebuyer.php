<!DOCTYPE html>
<html>
<head> 
<style>
.button {
    background-color: #009688 ; 
    border: none;
    color: #ffffff;
    padding: 3px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
}

.button4 
{

	border-radius: 20px;
}
.button4:hover
{
	background-color: #000000; 
	color:#ffffff;
}
#card
{
	width:50%;
	height:100%;
	
	margin:5% 25%;
}
.w3-container
{
	background-color:#f0f0f5;
	font-size:18px;
}
#hdesign
{
	background-color:#009688;
	color:#fff;
}
#fdesign
{
background-color:#009688;
}
label
{
	text-align:left;
}

</style>
<meta charset="UTF-8"><!--dt-->
<meta name="viewport" content="width=device-width, initial-scale=1"><!--dt-->
<link rel="stylesheet" href="../css/w3.css"><!--dt-->
<link rel="stylesheet" href="../css/icon.css"><!--dt-->
<title>Bizmart</title>


<?php 
error_reporting(0);
session_start();
$R_ID=$_SESSION['R_ID'];
include '../header/conn.php';

$select_query2="select type from signup where Userid='$R_ID'";
$fetch2=mysqli_query($connect,$select_query2);
while($row2=mysqli_fetch_array($fetch2))
{
	if($row2['type']=='buyer')
	{
			include'../header/buyerheader.php';
	}
	else
	{
			include'../header/supplierheader.php';
	}
}	
	


?>
</head><body  bgcolor=" #d9d9d9" style="overflow-y:auto;">


<?php


$select_query="select * from signup where Userid='$R_ID'";
$fetch=mysqli_query($connect,$select_query);
?>



<?php
while($row122=mysqli_fetch_array($fetch))
{
?>



<div id="card" class="w3-card-2 ">
<div class="w3-container" id="hdesign" ">
  <h3 align="center">MY PROFILE</h3>
</div>
<div class="w3-container" style="background-color:#fff !important;"align="center">
<label ><i class="material-icons">&#xe63d;</i>Name:</label><?php echo $row122['name'];?><br>
<label><i class="material-icons">&#xe158;</i>Email-ID:</label><?php echo $row122['email']; ?><br>
<label><i class="material-icons"></i>User:</label><?php echo $row122['type']; ?><br<!--/dt-->
<!--<a href="../uploads/<?php //echo //$row122['file'] ?>" target="_blank">view pic</a></td>--></i><br><br>
<a  href="../buyerbid/editprofilebuyer.php"><input class="button button4" type="submit" value="EDIT PROFILE" align="center"></a><br><br></div>
<footer  id="fdesign" class="w3-container " align="center">
  
</footer></div>



<?php
}	
?>

<?php


$select_query3="select * from signup where Userid='$R_ID'";
$fetch3=mysqli_query($connect,$select_query3);


while($row124=mysqli_fetch_array($fetch3))
{

	if($row124['type']=='buyer')
	{
		$result="buyer";
	}
	else
	{
		//
	}
}	


if($result=='buyer')
{
?>



<?php
$select_query2="select * from signup where Userid='$R_ID'";
$fetch2=mysqli_query($connect,$select_query2);


while($row123=mysqli_fetch_array($fetch2))
{
?>



<div id="card" class="w3-card-2 ">
<div class="w3-container" id="hdesign" ">
  <h3 align="center">COMPANY DETAILS</h3>
</div>
<div class="w3-container" style="background-color:#fff !important;"align="center">
<label ><i class="material-icons"></i>COMPANY Name:</label><?php echo $row123['Cname'];?><br>
<label><i class="material-icons"></i>COMPANY Email-ID:</label><?php echo $row123['C_emailid']; ?><br>
<label><i class="material-icons"></i>COMPANY ADDRESS:</label><?php echo $row123['Caddress']; ?><br><!--/dt-->
<label><i class="material-icons"></i>CONTACT NO:</label><?php echo $row123['Ccontact']; ?><br><!--/dt-->
<!--<a href="../uploads/<?php //echo $row122['file'] ?>" target="_blank">view pic</a></td>--></i><br><br>
<a  href="../buyerbid/editprofilecompany.php"><input class="button button4" type="submit" value="EDIT PROFILE" align="center"></a><br><br></div>
<footer  id="fdesign" class="w3-container " align="center">
  
</footer></div>


<?php

}

}

else{
	//
	
}


?>




		
    
</body>
</html>

