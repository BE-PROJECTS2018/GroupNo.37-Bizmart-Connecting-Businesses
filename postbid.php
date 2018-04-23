<?php 

session_start();
include('../header/supplierheader.php');

include('../header/conn.php');

?>
<!DOCTYPE html>
<html>
<head> 

<meta charset="UTF-8">
<title>BizMart</title>
</head>
<body>

<?php


$R_ID=$_GET["Userid"];

$c="select coins from signup where Userid=$R_ID";
$co=mysqli_query($connect,$c);
$Result=mysqli_num_rows($co);
while($row16=mysqli_fetch_array($co))
	{
		$v_count=$row16['coins'];
	}
//echo "<br>".$v_count;
$Pid=$_GET["Pid"];
if($v_count <>0)
{
$dt=date("Y-m-d");
$date_fun=date_create($dt);
$dfinal= date_format($date_fun,"Y-m-d");
//echo "<br/>".$dfinal;

$q="select * from biddet1 where Userid='$R_ID' AND Date_time='$dfinal'" ;
//echo $q;
$bidlimit=mysqli_query($connect,$q);
if($bidlimit)
{
	
	$result=mysqli_num_rows($bidlimit);
	//echo "<br/>".$result;
}
	
if($result>4)
	{
			?>
		<script>
		alert('LIMIT EXCEEDED');
   
	   window.location.href='../pl/supplierhome.php';
        </script>
		<?php
	}
		else
		{

$query="SELECT * FROM biddet1 WHERE Userid='$R_ID' AND Pid='$Pid' ";
//echo $query;
$run=mysqli_query($connect,$query);
if($run)
{

$number=mysqli_num_rows($run);

if($number>0)
	{
?>
<script>
alert('You cant bid you have already bid the project');
window.location.href='..//buyerbid/allprojectsbuyer.php';
</script>
<?php
}

else
	{
		
		

if(count($_POST)>0)	
{
	
	$sql35=mysqli_query($connect,"select Userid from propostdet1 where Pid='$Pid'; ");
while($row35=mysqli_fetch_array($sql35))

{
	$owner=$row35['Userid']; 
}
	
	$st="Pending";
	$sql17="INSERT INTO biddet1(Pid,Ownerid,Userid,Amount,Duration,Date_time,Status)VALUES
('$Pid','$owner','$R_ID','$_POST[m1]','$_POST[m2]',Current_time(),'$st')";

 $v_c=$v_count-2;
		$s="update signup set coins='$v_c' where Userid= '$R_ID'";
		$fetch5=mysqli_query($connect,$s);
		$sl="Select Ratings from profile_info where Userid='$R_ID'";	
		$fet5=mysqli_query($connect,$sl);
		
while($row5=mysqli_fetch_array($fet5))

{
	$Ratings=$row5['Ratings']; 
}
//echo $Ratings;

$sql9="INSERT INTO sug1 (Pid,Userid,Bud,Duration,Date_time) VALUES ('$Pid','$R_ID','$_POST[m1]','$_POST[m2]',Current_time())";
//echo $sql9;
mysqli_query($connect,$sql9);






if (!mysqli_query($connect,$sql17))
  {
  die('Error: ' . mysqli_error());
  }
  else
  {
	  ?>
	  <script>
		alert('1 bid added');
		window.location.href='../buyerbid/allprojectsbuyer.php';
        </script>
	  <?php
  }
 
 
	}


}
}
		}
}else
{
?>	
<script>

		alert('Please Buy Coins!!');
window.location.href='../pl/supplierhome.php';
		
</script>
<?php
}
?>




?>
</body>
</html>