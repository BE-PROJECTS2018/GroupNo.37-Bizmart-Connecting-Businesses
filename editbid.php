<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title>BizMart</title>
<?php include('../header/conn.php');
include('../header/supplierheader.php');?>
</head>
<body>
<?php
session_start();
$R_ID=$_SESSION["R_ID"];
$Pid=$_GET['Pid'];
if(count($_POST)>0)	
{
	$amt=$_POST['b1'];
	$dur=$_POST['b2'];
	
$sql67="update biddet1 set Amount='$amt',Duration='$dur',Date_time=Current_time() where Pid='$Pid'";

 
if (!mysqli_query($connect,$sql67))
  {
  die('Error: ' . mysqli_error());
  }
else
{
	?><script>
alert('Bid details updated');
   
	   window.location.href='bidprojects.php';
	   </script>
<?php
}
}
//mysql_close($con);
?>