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

.button4 
{border-radius: 20px;}

	#tabcaption
{
	background-color:#fff;
	color:#009688 ;
	font-size:20px;
	
}
#heading
{
		background-color:#009883;
		color:#ffffff;
}
#PDetails
	{
			background-color:#d9d9d9;
	}
	#SDetails
	{
			background-color:#d9d9d9;
	}
	
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/pstyle.css">
<link rel="stylesheet" href="../css/w3.css">
 <link rel="stylesheet" href="../css/bootstrap.min.css">
   <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
<title>BizMart</title>
<?php include('../header/conn.php');
include('../header/supplierheader.php');?>
</head>
<body>
<?php
session_start();
$R_ID=$_SESSION['R_ID'];
$q="select Pid,Amount,Duration,Date_time,Status from biddet1 where Userid='$R_ID'";
$sql13=mysqli_query($connect,$q);


?>


<table class="table table-condensed table-hover">
<tr><td id="tabcaption" colspan="6" align="center">PROJECTS BID BY ME</td></tr>
<tr>
<th id="heading">Pid</td>
<th id="heading">Amount</td>
<th id="heading">Duration</td>
<th id="heading">Date_time</td>
<th id="heading">Edit_Bid</td>
<th id="heading">BID Status</td>
</tr>
<?php
while($row13=mysqli_fetch_array($sql13))
{
	$st=$row13['Status'];
	if($st=="Approved")
	{
		?><tr>

<td class="info" id="PDetails"><a data-toggle="tooltip" data-placement="right" title="View details" href="projdet.php?Pid=<?php echo $row13['Pid']; ?>"><?php echo $row13['Pid']; ?></a><br></td>
<td ><?php echo $row13['Amount']; ?></td>
<td ><?php echo $row13['Duration']; ?></td>
<td ><?php echo $row13['Date_time']; ?></td>
<td > - - -</td>
<td  id="SDetails"><?php echo $row13['Status']; ?></td>
</tr>
<?php
}
else if($st=="Cancelled")
	{?><tr>

<td class="info" id="PDetails"> <a data-toggle="tooltip" data-placement="right" title="View details" href="projdet.php?Pid=<?php echo $row13['Pid']; ?>"><?php echo $row13['Pid']; ?></a><br></td>
<td ><?php echo $row13['Amount']; ?></td>
<td ><?php echo $row13['Duration']; ?></td>
<td ><?php echo $row13['Date_time']; ?></td>
<td  >- - -</td>
<td  id="SDetails"><?php echo $row13['Status']; ?></td>
</tr>
<?php
}
else
{
	?>
	<tr>

<td class="info" id="PDetails"><a data-toggle="tooltip" data-placement="right" title="View details" href="projdet.php?Pid=<?php echo $row13['Pid']; ?>"><?php echo $row13['Pid']; ?></a><br></td>
<td ><?php echo $row13['Amount']; ?></td>
<td ><?php echo $row13['Duration']; ?></td>
<td ><?php echo $row13['Date_time']; ?></td>
<td ><a class="button button4" data-toggle="tooltip" data-placement="right" title="Click to Edit" href="editbiddetails.php?Pid=<?php echo $row13['Pid'];?>">EDIT BID DETAILS</a></td>
<td id="SDetails" ><?php echo $row13['Status']; ?></td>
</tr>
	<?php
}
?>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script><?php
}
?>
</table>
<?php
//mysql_close($con);
?>