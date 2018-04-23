<?php 
session_start();
include('../header/conn.php');
include('../header/buyerheader.php');
?>
<!DOCTYPE html>
<html>
<head> 

<meta charset="UTF-8">
<title>BizMart</title>
</head>
<body>

<?php

$R_ID=$_GET['Userid'];
$Pid=$_GET['Pid'];

	
	$st='Approved';
	$sql71="update biddet1 set Status='$st' WHERE Userid='$R_ID' AND Pid='$Pid'  ";


if (!mysqli_query($connect,$sql71))
  {
  die('Error: ' . mysqli_error());
  }
  else
  {
	  ?>
	  <script>
		alert('1 bid approved');
		window.location.href='../buyerbid/myprojectbuyer.php';
        </script>
	  <?php
  }
  $sql72="update propostdet1 set Status='$st' WHERE  Pid='$Pid'  ";
  if (!mysqli_query($connect,$sql72))
  {
  die('Error: ' . mysqli_error());
  }
  else
  {
	  ?>
	  <script>
		alert('project status changed');
		window.location.href='../buyerbid/myprojectbuyer.php';
        </script>
	  <?php
  } 
  $cnst='Cancelled';
$sql73="update biddet1 set Status='$cnst' WHERE Userid<>'$R_ID' AND Pid='$Pid'";
  if (!mysqli_query($connect,$sql73))
  {
  die('Error: ' . mysqli_error());
  }

  $query="SELECT * FROM signup WHERE Userid='$R_ID'";
  $result=mysqli_query($connect,$query);
  $row=mysqli_fetch_array($result);
// echo "dsds".$row['R_email'];

					 $email=$row['email'];
					 $name=$row['name'];


  $query="SELECT * FROM propostdet1 WHERE Pid='$Pid'";
  $result=mysqli_query($connect,$query);
  $row=mysqli_fetch_array($result);


					 $pname=$row['Pname'];



$query="SELECT * FROM biddet1 WHERE Pid='$Pid' AND Userid ='$R_ID'";
  $result=mysqli_query($connect,$query);
  $row=mysqli_fetch_array($result);



					 $amount=$row['Amount'];
					 $duration=$row['Duration'];


 /* */




 $msg = "User ". $name."
 Congratulations!Your Bid for the Project ".$pname." at the amount ".$amount." for ". $duration." days has been approved by the Project owner. So you can contact him/her for further details and queries";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email

mail($email,"Project Approval Message",$msg,"From:noReply@cnd.com");

	?>
	<script>
	alert('Mail sent to the client');
	window.location.href='../buyerbid/myprojectbuyer.php';
	</script>
	<?php



//mysql_close($con);
?>