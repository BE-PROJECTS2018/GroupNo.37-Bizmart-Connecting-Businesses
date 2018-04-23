<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title>BizMart</title>
<?php include'../header/conn.php';?>
</head>
<body>
<?php
session_start();
include'../header/buyerheader.php';
$R_ID=$_SESSION["R_ID"];
$Pid=$_GET['Pid'];
if(count($_POST)>0)	
{
	$pt=$_POST['e1'];
	$pn=$_POST['e2'];
	$sk=$_POST['e3'];
	$pd=$_POST['etr1'];
	$bd=$_POST['e4'].$_POST["currency"];
	$dur=$_POST['e5'];
$sql66="update propostdet1 set Ptype='$pt',Pname='$pn',Quantity='$sk',Pdesp='$pd',Budget='$bd',Duration='$dur',Date_time=Current_time() where Pid='$Pid'";
mysqli_query($connect,$sql66);
  
  ?>
<script>
alert('Project details updated');
		window.location.href="../buyerbid/myprojectbuyer.php";
</script>
<?php

}

?>