<!DOCTYPE html>
<html>
<head> 
<style>
#hdesign
{
	background-color:#999999;
}
#fdesign
{
	background-color:#999999;
}

#carddesign
{
	width:60%;
	margin:10% 20%;
}
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../css/w3.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
    <link href="../css/hover.css" rel="stylesheet" media="all">
			<script src="../js/modernizr.custom.js"></script>
<title>BizMart</title>
<?php 
include('../header/conn.php');
include('../header/supplierheader.php');
$Pid=$_GET['Pid'];
$q="select Budget,Duration from propostdet1 where Pid=$Pid ";
$sql1=mysqli_query($connect,$q);
			while($row1=mysqli_fetch_array($sql1))
			{
			
				$bdgt=$row1['Budget'];
				
					if (strpos($bdgt, 'EURO') !== false) 
			{
			$bdgt=rtrim($bdgt,"EURO");
		
			}
			
			if (strpos($bdgt, 'Rupee') !== false) 
			{
			$bdgt=rtrim($bdgt,"Rupee");
		
			}
		
		if (strpos($bdgt, 'Pound') !== false) 
			{
			$bdgt=rtrim($bdgt,"Pound");
			
			}
		
		if (strpos($bdgt, 'DOLLAR') !== false) 
			{
			$bdgt=rtrim($bdgt,"DOLLAR");
	
			}
		
		if (strpos($bdgt, 'Lira') !== false) 
			{
			$bdgt=rtrim($bdgt,"Lira");
		
			}
			
				$dur=$row1['Duration'];
				

			}


?>
</head>
<body  bgcolor="#cce6ff">
<div id="carddesign"class="w3-card-4" >
 
<header id="hdesign" class="w3-container w3-center "><h3 class="w3-center">EDIT BID DETAILS</h3></header>

<div class="w3-container" style="margin: 0 0 30px 0">
<form name="f6" method="post" action="editbid.php?Pid=<?php echo $Pid;?>" >
<br>
<legend>REQUIRED DETAILS</legend>
<label style="font-size:16px;padding:0 10px 0 0">Amount</label><input class="w3-input w3-animate-input w3-border" type="number" name="b1" max="<?php echo $bdgt;?>" placeholder="Enter the amount" style="width:70%" required>
<br>
<label style="font-size:16px;padding:0 10px 0 0">Duration</label><input class="w3-input w3-animate-input w3-border" type="number" name="b2"  placeholder="number of days" style="width:70%" required></div>
<div class="w3-container w3-center" id="fdesign" style="height:60px;padding:10px 0 10px 0">
<button class="w3-btn w3-large hvr-round-corners w3-light-grey" type="submit" name="b6" value="SUBMIT" >SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="w3-btn  w3-large  hvr-round-corners w3-light-grey" type="reset" name="b7" value="CLEAR" >RESET</button></form></div></div>


</body>

</html>
