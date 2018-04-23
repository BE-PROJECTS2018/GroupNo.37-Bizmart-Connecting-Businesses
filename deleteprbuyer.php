<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title>BizMart</title>
<?php 
include'../header/conn.php';
include'../header/buyerheader.php';?>
</head>
<body>
<?php
session_start();

$Pid=$_GET['Pid'];
//echo "WELCOME";


$cnst='Cancelled';
$sql76="update propostdet1 set Status='$cnst' WHERE Pid='$Pid'";
  mysqli_query($connect,$sql76);
  
  


?>

<script>

	alert('This project is successfully removed');
    window.location.href='../buyerbid/myprojectbuyer.php';
	
</script>
		
<?php
		 

 $sql77="update biddet1 set Status='$cnst' WHERE  Pid='$Pid'";
  if (!mysqli_query($connect,$sql77))
  {
  die('Error: ' . mysqli_error());
  }
  else
  {
	?><script>
		alert('Project related bids cancelled');
   
	   window.location.href='../buyerbid/myprojectbuyer.php';
        </script><?php
		  
  }
//mysqli_close($con);


?>