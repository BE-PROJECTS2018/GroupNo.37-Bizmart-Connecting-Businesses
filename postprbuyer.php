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
@session_start();


$R_ID=$_SESSION["R_ID"];

$c="select coins from signup where Userid=$R_ID";
$co=mysqli_query($connect,$c);
$Result=mysqli_num_rows($co);
while($row16=mysqli_fetch_array($co))
	{
		$v_count=$row16['coins'];
	}
//echo "<br>".$v_count;
if($v_count <>0)
{
$dt=date("Y-m-d");
$date_fun=date_create($dt);
$dfinal= date_format($date_fun,"Y-m-d");
//echo "<br/>".$dfinal;
 $select_query="select * from propostdet1 where Userid='".$_SESSION["R_ID"]."' AND Date_time>='".$dfinal."'";
$postlimit=mysqli_query($connect,$select_query);

$fetch=mysqli_query($connect,$select_query);
	

if($fetch)
{
	
	$result=mysqli_num_rows($fetch);
	//echo "<br/>".$result;

}

if($result>4)
	{
?>
	
			<script>
			alert('LIMIT EXCEEDED');
			window.location.href='../pl/buyerhome.php';
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
		//echo $bdgt;
		$v_c=$v_count-2;
		$s="update signup set coins='$v_c' where Userid= $R_ID";
		$fetch5=mysqli_query($connect,$s);
		
		$sql2="INSERT INTO propostdet1(Userid,Ptype,Pname,Quantity,Pdesp,Budget,Duration,Date_time,Status) VALUES('$R_ID','$_POST[w1]','$_POST[w2]','$_POST[w3]','$_POST[tr1]','$bdgt','$_POST[w5]',Current_time(),'$st')";
		$fetch=mysqli_query($connect,$sql2);
		
		$sql3="select email from signup where type ='supplier'";
		$fetch2=mysqli_query($connect,$sql3);
		
		
		if($_POST['w5']=='Less Than Week')
		{
			$msg="New project is added to our system"."\n"."Name of the project is ".$_POST['w2']."\n"."Type of the project is ".$_POST['w1']."\n"."Budget of the project is ".$bdgt."\n"."Duration of the project is less than one week,so make sure you bid on this project as soon as possible" ;
		}
		
		if($_POST['w5']=='1-2Weeks')
		{
			$msg="New project is added to our system"."\n"."Name of the project is ".$_POST['w2']."\n"."Type of the project is ".$_POST['w1']."\n"."Budget of the project is ".$bdgt."\n"."Duration of the project is 1-2 Weeks,so make sure you bid on this project as soon as possible";
		}
		
		if($_POST['w5']=='3-4Weeks')
		{
			$msg="New project is added to our system"."\n"."Name of the project is ".$_POST['w2']."\n"."Type of the project is ".$_POST['w1']."\n"."Budget of the project is ".$bdgt."\n"."Duration of the project is 3-4 Weeks,so make sure you bid on this project as soon as possible";
		}
		
		if($_POST['w5']=='Above 4Weeks')
		{
			$msg="New project is added to our system"."\n"."Name of the project is ".$_POST['w2']."\n"."Type of the project is ".$_POST[w1]."\n"."Budget of the project is ".$bdgt."\n"."Duration of the project is Above 4 Weeks,so make sure you bid on this project as soon as possible";
		}
		
		
		
		
		
		while($row2=mysqli_fetch_array($fetch2))
		{
			$email2=$row2['email'];
			
			mail($email2,"New project",$msg,"From:noReply@BizMart.com");
		}
		

?>
<script>

		alert('Thank you,your project is added to our project list');
window.location.href='../pl/buyerhome.php';
		
</script>

<?php

	}
}

}
else
{
?>	
<script>

		alert('Please Buy Coins!!');
window.location.href='../pl/buyerhome.php';
		
</script>
<?php
}
?>

