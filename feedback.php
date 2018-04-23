<!DOCTYPE html>
<html>
<head> 
<style>
#carddesign
{
	width:60%;
	margin:8% 20%;
}
#hdesign
{
	background-color:#009688;
	color:#fff;
}
#fdesign
{
	background-color:#009688;
}
</style>

	
			
				
					
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('../header/conn.php');
include('../header/buyerheader.php');?>
<link rel="stylesheet" href="../css/w3.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
    <link href="../css/hover.css" rel="stylesheet" media="all">
			<script src="../js/modernizr.custom.js"></script>
<title>BizMart</title></head>
<?php 
$Pid=$_GET['Pid'];
$R_ID=$_GET['Userid'];
/*$q="select Budget,Duration from propostdet1 where Pid="."$Pid"." ";
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

*/?>
	
<body  bgcolor="#cce6ff">
<div id="carddesign" class="w3-card-4" >
 
<header id="hdesign" class="w3-container w3-center"><h3 class="w3-center">Feedback Form</h3></header>

<div class="w3-container" style="margin: 0 0 30px 0">
<form name="f6" method="post" action="fed.php?Pid=<?php echo $Pid;?>&Userid=<?php echo $R_ID;?>" >
<br>
<fieldset><legend>Ratings</legend>
<label style="font-size:16px;padding:0 10px 0 0">Cost Feedback</label><input class="w3-input w3-animate-input w3-border" type="number" name="f1"  id="bdgt" placeholder="Out of 5" style="width:70%" max=5 required>
<br>
<label style="font-size:16px;padding:0 10px 0 0">Time Feedback</label><input class="w3-input w3-animate-input w3-border" type="number" name="f2" id="dur" placeholder="Out of 5" style="width:70%"max=5 required></div></fieldset>
<div id="fdesign" class="w3-container w3-center" style="height:60px;padding:10px 0 10px 0;">
<button class="w3-btn w3-large hvr-round-corners w3-hover-black w3-light-grey" type="submit" name="f6" id="sbtn" value="SUBMIT">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="w3-btn  w3-large  hvr-round-corners w3-hover-black w3-light-grey" type="reset" name="f7" id="rsbtn" value="CLEAR" >RESET</button></form></div></div>

 </body>
</html>
