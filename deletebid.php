<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title>BizMart</title>
<?php include('../header/conn.php');
include('../header/buyerheader.php');?>
</head>
<body>
<?php
session_start();

$R_ID=$_GET['Userid'];
//echo "WELCOME";
$Pid=$_GET['Pid'];


 $cnst='Cancelled';
$sql75="update biddet1 set Status='$cnst' WHERE Userid='$R_ID' AND Pid='$Pid'";
  if (!mysqli_query($connect,$sql75))
  {
  die('Error: ' . mysqli_error());
  }
  else
  {


?><script>
		alert('1 bid cancelled');
   
	   window.location.href='../buyerbid/myprojectbuyer.php';
        </script><?php
		 
}
//mysql_close($con);
?>