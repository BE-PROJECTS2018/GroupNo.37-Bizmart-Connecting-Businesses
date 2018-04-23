<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title>BizMart</title>

<?php 
include'../header/conn.php';
include'../header/buyerheader.php';
?>
</head>
<body>
<?php
session_start();
$R_ID=$_SESSION["R_ID"];
$dt=date("Y-m-d");
$date_fun=date_create($dt);
$dfinal= date_format($date_fun,"Y-m-d");
//echo "<br/>".$dfinal;
$select_query="select * from propostdet1 where Userid='".$_SESSION["R_ID"]."' AND Date_time>='".$dfinal."'";
$postlimit=mysqli_query($connect,$select_query);

if($postlimit)
{
	
	$result=mysqli_num_rows($postlimit);
	//echo "<br/>".$result;
}

if($result>4)
	{
?>
	
			<script>
			alert('LIMIT EXCEEDED');
			window.location.href='../pl/Buyerhome.php';
			</script>
		<?php
}
else
{
	if(count($_POST)>0)	
	{	
		include'../header/conn.php';
		$st="Pending";
		$bdgt=$_POST["w4"].$_POST["currency"];
		echo $bdgt;
$sql2="INSERT INTO propostdet1(Userid,Ptype,Pname,Quantity,Pdesp,Budget,Duration,Date_time,Status)VALUES
('$R_ID','$_POST[w1]','$_POST[w2]','$_POST[w3]','$_POST[tr1]','$bdgt','$_POST[w5]',Current_time(),'$st')";
		$fetch=mysqli_query($connect,$sql2);
		/*
		 $sql3="select email from signup where type ='supplier'";
		$fetch2=mysqli_query($connect,$sql3);
		while($row2=mysqli_fetch_array($fetch2))
		{
			$email2=$row2['email'];
			$msg="New project is added to our system ,Name of the project is".$_POST['w2'];
			mail($email2,"New project",$msg,"From:noReply@BizMart.com");
		}
		*/

?>
<script>

		alert('Thank you! your project is added to our project list');
		window.location.href='../pl/Buyerhome.php';
		
</script>

<?php

	}
}

?>