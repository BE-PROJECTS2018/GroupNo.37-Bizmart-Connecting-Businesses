<?php 

session_start();
//include('../header/supplier1header.php');

include('../header/conn.php');

?>
<?php


$R_ID=$_GET["Userid"];
$Pid=$_GET["Pid"];

	$sql17="INSERT INTO feedback1(Userid,Pid,t_r,c_r)VALUES('$R_ID','$Pid','$_POST[f2]','$_POST[f1]')";
if (!mysqli_query($connect,$sql17))
  {
  die('Error: ' . mysqli_error());
  }
  else
  {
	  ?>
	  <script>
		alert('Thanks For Feedback');
		window.location.href='../buyerbid/myprojectbuyer.php';
        </script>
 <?php 
 }?>