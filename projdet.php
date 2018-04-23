<!DOCTYPE html>
<html>
<head> 
<style>
#rcorners1 {
    border-radius: 15px;
    background: #f2f2f2;
    padding: 5px; 
    width: 50%;
    height: 0.5%; 
}
#rcorners1:hover
{
	background: #ffffff;
}
#card
{
	width:50%;
	height:100%;
	
	margin:5% 25%;
}
.w3-container
{

	background-color:#f0f0f5;
	font-size:18px;
	
}
#main
{
padding:5% 0 0 5%;	
}
#hdesign
{
	background-color:#009688 ;
	color:#fff;
}
#fdesign
{
	background-color:#009688 ;
color:#fff;
}
label
{
	text-align:left;
}
h3
{
	color:#ffffff;
}
#backcolor
{
	background-color:#f0f0f5;
}
</style>
<meta charset="UTF-8">
<meta name="viewport" content="widlabel=device-widlabel, initial-scale=1">

<link rel="stylesheet" href="../css/w3.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

<title>BizMart</title>
<?php 
include('../header/conn.php');
include('../header/supplierheader.php');
?>
</head>
<body id="backcolor">
<?php
session_start();
$Pid=$_GET['Pid'];
$query="select Userid,Ptype,Pname,Quantity,Pdesp,Budget,Duration,Date_time from propostdet1 where Pid='$Pid'" ;
$sql14=mysqli_query($connect,$query);
?>
<?php
while($row14=mysqli_fetch_array($sql14))
{
	?>

<div id="card" class="w3-card-2 ">
<div class="w3-container" id="hdesign" >
 <h3 align="center">PROJECT DETAILS</h3>
</div>
<div id ="main" class="w3-container" >
<label>Owner:</label>&emsp;<a data-toggle="tooltip" data-placement="right" title="View details" href="Udetails.php?Userid=<?php echo $row14['Userid']; ?>"><i id="rcorners1"><?php echo $row14['Userid']; ?></i></a><br/>
<label>Project Type:</label>&emsp;<i id="rcorners1"><?php echo $row14['Ptype']; ?></i></i><br/>
<label>Project Name:</label>&emsp;<i id="rcorners1"><?php echo $row14['Pname']; ?></i><br/>
<label>Quantity:</label>&emsp;<i id="rcorners1"><?php echo $row14['Quantity']; ?></i><br/>
<label>Project Description:</label>&emsp;<i id="rcorners1"><?php echo $row14['Pdesp']; ?></i><br/>
<label>Budget:</label>&emsp;<i id="rcorners1"><?php echo $row14['Budget']; ?></i><br/>
<label>Duration:</label>&emsp;<i id="rcorners1"><?php echo $row14['Duration']; ?></i><br/>
<label>Date_time:</label>&emsp;<i id="rcorners1"><?php echo $row14['Date_time']; ?></i><br/><br/></div>
<footer  id="fdesign" class="w3-container " align="center">
  <h5>Please don't misuse the details</h5>
</footer></div>
<?php
}
?>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>