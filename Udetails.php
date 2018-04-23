<?php include('../header/conn.php');
include('../header/supplierheader.php');?>
<!DOCTYPE html>
<html>
<head> 
<style>
#card
{
	width:50%;
	height:50%;
	
	margin:5% 25%;
}
.w3-container
{
	background-color:#f0f0f5;
	font-size:18px;
}
#hdesign
{
	background-color:#999999;
}
#fdesign
{
	background-color:#999999;
}
label
{
	text-align:left;
}

</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<!--<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">-->
<link rel="stylesheet" href="../css/icon.css">
<!--<link rel="stylesheet" href="../css/rstyle.css">-->
<title>BizMart</title>

</head>
<body>
<?php
session_start();
$v_count=0;
$R_ID=$_GET['Userid'];
$VR_ID=$_SESSION['R_ID'];

if(!($R_ID==$VR_ID))
{
	// retrive the view count from the table
	$query="select Views from profile_info where Userid='$R_ID'" ;
$sql11=mysqli_query($connect,$query);
$numResults = mysqli_num_rows($sql11);
if ($numResults > 0)
  {
	// if the entry is present in the table
	while($row11=mysqli_fetch_array($sql11))
	{
		$pv_count=$row11['Views'];
		$pv_count=$pv_count+1;
		//echo $pv_count;
		$fetch="update profile_info set Views='$pv_count' where Userid='$R_ID'";
		$sql14=mysqli_query($connect,$fetch);
		//echo "SUCCESSFULL INSERTED";
	}
  } 
  // if entry is not present in the table
else {
  
   $v_count=$v_count+1;
   $fe="INSERT INTO profile_info (Userid,Views) VALUES ('$R_ID','$v_count')";
   $sql14=mysqli_query($connect,$fe);
  // $row14=mysqli_fetch_array($sql14)
   //echo $row14['Views'] ;
     }
}
$f="select name,email,contact from signup where Userid='$R_ID' ";
$sql12=mysqli_query($connect,$f);
?>


<?php
while($row12=mysqli_fetch_array($sql12))
{?>

<div id="card" class="w3-card-2">
<header class="w3-container" id="hdesign">
  <h3 align="center">BUYER DETAILS</h3>
</header>
<div class="w3-container" align="center">

<label ><i class="material-icons">&#xe63d;</i>Name:</label>&emsp;<?php echo $row12['name'];?><br>
<label><i class="material-icons">&#xe158;</i>Email-ID:</label><?php echo $row12['email']; ?><br>
<label><i class="material-icons">&#xe0cd;</i>Contact-NO:</label><?php echo $row12['contact']; ?><br></div>
<footer id="fdesign" class="w3-container " >
  <h5 align="center">Please do not misuse the number</h5>
</footer></div>
<?php
}
?>
</body>
</html>