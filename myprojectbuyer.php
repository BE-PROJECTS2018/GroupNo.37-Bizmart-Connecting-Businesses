<!DOCTYPE html>
<html>
<head> 
<style>

.button {
    background-color: #009883; 
    border: none;
    color: #ffffff;
    padding: 3px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
}

.button4 
{
	border-radius: 20px;
	}
	th
	{
		background-color:#009883;
	}
	#biddetails
	{
		background-color:#fff;
	}
	#PDetails
	{
			background-color:#d9d9d9;
	}
	#heading
	{
		color:#ffffff;
	}

#tabcaption
{
	background-color:#fff;
	color:#009688 ;
	font-size:20px;
	
}

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../css/w3.css"><!--dt-->
  <link rel="stylesheet" href="../css/bootstrap.min.css"><!--dt-->
  <script src="../js/jquery.min.js"></script><!--dt-->
  <script src="../js/bootstrap.min.js"></script><!--dt-->
<meta charset="UTF-8">


<title>Bizmart</title>
<?php include'../header/buyerheader.php';
include '../header/conn.php';?>
</head>

<body>

<?php

session_start();
$R_ID=$_SESSION['R_ID'];
include '../header/conn.php';
$fetch="select * from propostdet1 where Userid='$R_ID'";

$sql10=mysqli_query($connect,$fetch);


?>
<div class="xyz">
<table  class="table table-condensed table-hover"><!--dt-->
<td id="tabcaption" colspan="11" align="center">PROJECTS POSTED BY ME</td><!--syntax-->
<tr>
<th id="heading" >ID</th><!--dt-->
<th id="heading" >Type</th>
<th id="heading" >Name</th>
<th id="heading"  >Quantity</th>
<th  id="heading">Description</th>
<th  id="heading">Budget</th>
<th  id="heading" >Duration</th>
<th  id="heading">Date_time</th>
<th id="heading">Bid details</th>
<th id="heading">EDIT PROJECT</th>
<th id="heading">REMOVE PROJECT</th>
</tr>

<?php


while($row10=mysqli_fetch_array($sql10))
{
	//$result=mysqli_num_rows($sql10);
	//echo $result;
	$st=$row10['Status'];

	
	if($st=="Approved")
	{

	
?>

<tr>
<td id="PDetails"><?php echo $row10['Pid']; ?></a></td>
<td ><?php echo $row10['Ptype']; ?></td>
<td ><?php echo $row10['Pname']; ?></td>
<td ><?php echo $row10['Quantity']; ?></td>
<td ><?php echo $row10['Pdesp']; ?></td>
<td ><?php echo $row10['Budget']; ?></td>
<td ><?php echo $row10['Duration']; ?></td>
<td ><?php echo $row10['Date_time']; ?></td>
<td id ="biddetails" class="info"><div class="box">
	<a class="button button4" data-toggle="tooltip" data-placement="left" title="View details" href="bid.php?Pid=<?php echo $row10['Pid'];?>">View Bids</a>
</div></td>
<td id ="biddetails"><?php echo "Project assigned"; ?></td>
<td id ="biddetails" ><?php echo "Project assigned"; ?></td>


<?php

	}
	if($st=="Pending")
	{


?>
<tr>
<td id="PDetails"><?php echo $row10['Pid']; ?></a></td>
<td ><?php echo $row10['Ptype']; ?></td>
<td ><?php echo $row10['Pname']; ?></td>
<td ><?php echo $row10['Quantity']; ?></td>
<td ><?php echo $row10['Pdesp']; ?></td>
<td ><?php echo $row10['Budget']; ?></td>
<td ><?php echo $row10['Duration']; ?></td>
<td ><?php echo $row10['Date_time']; ?></td>
<td id ="biddetails" class="info"><div class="box">

	<a class="button button4" data-toggle="tooltip" data-placement="left" title="View details" href="bid.php?Pid=<?php echo $row10['Pid'];?>">View Bids</a>
</div></td>
<td  id ="biddetails" class="info"><div class="box">

	<a class="button button4" data-toggle="tooltip" data-placement="right" title="Edit details" href="../buyerbid/editprojectbuyer.php?Pid=<?php echo $row10['Pid'];?>">Edit</a>
</div></td><!--data toggle-->
<td  id ="biddetails" class="info">
<div class="box">
<a  data-toggle="tooltip" data-placement="right"  title="Remove Project" href="../buyerbid/deleteprbuyer.php?Pid=<?php echo $row10['Pid'];?>"><input type="button" class="button button4" name="rmbtn" value="REMOVE"></a>
</div>

<br>




<?php

	}
	if($st=="Cancelled")
	{


?>

<tr>
<td id="PDetails"><?php echo $row10['Pid']; ?></a></td>
<td ><?php echo $row10['Ptype']; ?></td>
<td ><?php echo $row10['Pname']; ?></td>
<td ><?php echo $row10['Quantity']; ?></td>
<td ><?php echo $row10['Pdesp']; ?></td>
<td ><?php echo $row10['Budget']; ?></td>
<td ><?php echo $row10['Duration']; ?></td>
<td ><?php echo $row10['Date_time']; ?></td>
<td id ="biddetails" class="info"><div class="box">
	<a class="button button4" data-toggle="tooltip" data-placement="left" title="View details" href="bid.php?Pid=<?php echo $row10['Pid'];?>">View Bids</a>
</div></td>
<td id ="biddetails"><?php echo "Project removed"; ?></td>
<td id ="biddetails"><?php echo "Project removed"; ?></td>
</tr>

<?php
	}
	
	

}?>
</table>
		 </div>
</body>
<script>
$(document).ready(function()
{
    $('[data-toggle="tooltip"]').tooltip();   
}
);
</script>



	

