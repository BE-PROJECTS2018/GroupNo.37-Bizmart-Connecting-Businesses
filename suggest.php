<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" href="../css/w3.css">
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

.button4 {border-radius: 20px;}
h4
{ background-color: #009883; 
    border: none;
    color: white;
	 padding: 5px 15px 5px 0;
	  margin: 2px 2px;}
	  .table{
	 border: 1px solid #d9d9d9;
	  }
</style>



<meta charset="UTF-8">
<title>BizMart</title>

<link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
<?php include('../header/conn.php');
include('../header/buyerheader.php');?>
</head>
<?php
$w="select * from sug1 where Ratings>=3.5";
$fet=mysqli_query($connect,$w);
while($row5=mysqli_fetch_array($fet))

{
	$Ratings=$row5['Ratings'];
	$Pid=$row5['Pid'];
	$Userid=$row5['Userid'];
	$Duration=$row5['Duration'];
	$Bud=$row5['Bud'];
	$Date_time=$row5['Date_time'];

//	echo $Userid;
	$f="Insert Into Sugg1 (Pid,Userid,Ratings,Bud,Duration,Date_time) Values ('$Pid','$Userid','$Ratings','$Bud','$Duration','$Date_time')";
$fe=mysqli_query($connect,$f);
	}
$e="SELECT MIN(Bud) AS bif FROM sugg1 where Pid='$Pid'";
$se=mysqli_query($connect,$e);
while($row6=mysqli_fetch_array($se))

{

 
$t=$row6['bif'];
}
//echo $t;
$wi="select * from sugg1 where +Bud='$t' AND Pid='$Pid'";
$q=mysqli_query($connect,$wi);
//echo $wi;
while($row5=mysqli_fetch_array($q))

{
	$Ratings=$row5['Ratings'];
	$Pid=$row5['Pid'];
	$Userid=$row5['Userid'];
	$Duration=$row5['Duration'];
	$Bud=$row5['Bud'];
$Date_time=$row5['Date_time'];
}?>
<table class="table table-condensed table-hover" >

<tr >
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Userid</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Amount</strong></td>
<td width="10%" align="center" bgcolor="#E6E6E6"><strong>Duration</strong></td>
<td width="24%" align="center" bgcolor="#E6E6E6"><strong>Date_time</strong></td>
<td width="64%" align="center" bgcolor="#E6E6E6"><strong>Approve/Cancel BID</strong></td>
<td width="64%" align="center" bgcolor="#E6E6E6"><strong>Feedback</strong></td>
</tr>
</table>
<table class="table table-condensed table-hover" >
 
 <tr>
	<form name="f11" method="post" action="appbid.php?Userid=<?php echo $row5['Userid'];?>&Pid=<?php echo $Pid;?>">
<td align="center" width="6%"  bgcolor="#FFFFFF"><a href="Sdetails.php?Userid=<?php echo $Userid; ?>"><?php echo $Userid; ?></a></td>
<td align="center"  width="15%"  bgcolor="#FFFFFF"><?php echo $Bud; ?></td>
<td align="center" width="10%"  bgcolor="#FFFFFF"><?php echo $Duration; ?></td>
<td align="center"  width="24%" bgcolor="#FFFFFF"><?php echo $Date_time; ?></td>
<td align="center" width="64%" bgcolor="#FFFFFF"><input type="submit" name="apbtn" value="APPROVE" class="button button4"></a>	&nbsp;	&nbsp;	&nbsp;&nbsp;
<a href="deletebid.php?Userid=<?php echo $row5['Userid']; ?>&Pid=<?php echo $Pid;?>"><input type="button" name="cnbtn" value="CANCEL" class="button button4"></a></td></form>
	<form name="f12" method="post" action="feedback.php?Userid=<?php echo $row5['Userid'];?>&Pid=<?php echo $Pid;?>">
<td align="center" width="64%" bgcolor="#FFFFFF"><input type="submit" name="feed" value="FEEDBACK" class="button button4"></a>	&nbsp;	&nbsp;	&nbsp;&nbsp;</td></form>
</tr>
</table>
<?php

?>