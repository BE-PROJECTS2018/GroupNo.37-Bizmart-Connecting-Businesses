<!DOCTYPE html>
<html>
<head> 
<style>
.button {
    background-color: #009883; 
    border: none;
    color: #ffffff;
    padding: 2px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
}
#heading
{
	background-color:#1b7e71;
	color:#ffffff;
}
.button4 
{border-radius: 20px;}
#design
{
	background-color:#e6e6e6;
}
#tabcaption
{
	background-color:#fff;
	font-size:20px;
	color:#009688 ;
}
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/dstyle.css">
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
<body>
<?php
session_start();

 $R_ID=$_SESSION["R_ID"];

$sql15="select Pid,Userid,Ptype,Pname,Quantity,Pdesp,Budget,Duration,Date_time,Status from propostdet1;";
$res=mysqli_query($connect,$sql15);
    if (!$res) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}
?>
    

<div style="overflow-x:auto;">
<table class="table table-condensed table-hover" >
<tr>
<td id="tabcaption" colspan="10" align="center">PROJECTS</td>
</tr>

<tr>
<th id="heading" >ID</th>
<th id="heading" >Owner</th>
<th id="heading" >Type</th>
<th id="heading" >Name</th>
<th  id="heading">Budget</th>
<th  id="heading"  >Duration</th>
<th  id="heading">Date_time</th>
<th  id="heading">Bid</th>
</tr>
<?php
while($row15=mysqli_fetch_array($res))
    
{
	
	$st=$row15['Status'];
	
	if($st=="Approved")
	{
	?><tr>
<td class="info" id="design"><a data-toggle="tooltip" data-placement="right" title="View details" href="projdet.php?Pid=<?php echo $row15['Pid']; ?> "><?php echo $row15['Pid']; ?></a><br></td>

<td class="info" id="design"><a data-toggle="tooltip" data-placement="right" title="View details" href="Udetails.php?Userid=<?php echo $row15['Userid']; ?> "><?php echo $row15['Userid']; ?></a><br></td>
<td class="w3-light-grey"><?php echo $row15['Ptype']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Pname']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Budget']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Duration']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Date_time']; ?></td>
<td class="info" id="design">
Project is assigned
</td></tr>
	
<?php
}
elseif($st=="Cancelled")
	{
	?><tr>
<td class="info" id="design"><a data-toggle="tooltip" data-placement="right" title="View details" href="projdet.php?Pid=<?php echo $row15['Pid']; ?> "><?php echo $row15['Pid']; ?></a><br></td>

<td class="info" id="design"><a data-toggle="tooltip" data-placement="right" title="View details" href="Udetails.php?Userid=<?php echo $row15['Userid']; ?> "><?php echo $row15['Userid']; ?></a><br></td>
<td class="w3-light-grey"><?php echo $row15['Ptype']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Pname']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Budget']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Duration']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Date_time']; ?></td>
<td class="info" id="design">
Project is Cancelled
</td></tr>
	
<?php
}
else 
{
		?><tr>
<td class="info" id="design"><a data-toggle="tooltip" data-placement="right" title="View details" href="projdet.php?Pid=<?php echo $row15['Pid']; ?> "><?php echo $row15['Pid']; ?></a><br></td>

<td class="info" id="design"><a data-toggle="tooltip" data-placement="right" title="View details" href="Udetails.php?Userid=<?php echo $row15['Userid']; ?> "><?php echo $row15['Userid']; ?></a><br></td>
<td class="w3-light-grey"><?php echo $row15['Ptype']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Pname']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Budget']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Duration']; ?></td>
<td class="w3-light-grey"><?php echo $row15['Date_time']; ?></td>
<td class="info" id="design">
	<a class="button button4" data-toggle="tooltip" data-placement="top" title="Click to bid" href="biddetails.php?&Pid=<?php echo $row15['Pid'];?>&Userid=<?php echo $R_ID; ?> ">Bid Project</a>
</td></tr>
	
<?php
}
}
?>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</div>
</body>
</html>