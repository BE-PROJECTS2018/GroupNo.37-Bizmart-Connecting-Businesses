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
<body style="overflow-y:auto">

<?php
@session_start();
$Pid=$_GET['Pid'];
$q="select Userid,Amount,Duration,Date_time,Status from biddet1 where Pid='$Pid'";
$sql11=mysqli_query($connect,$q);
?>

<table class="table table-condensed table-hover" >

<tr >
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Userid</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Amount</strong></td>
<td width="10%" align="center" bgcolor="#E6E6E6"><strong>Duration</strong></td>
<td width="24%" align="center" bgcolor="#E6E6E6"><strong>Date_time</strong></td>
<td width="64%" align="center" bgcolor="#E6E6E6"><strong>Approve/Cancel BID</strong></td>
<td width="64%" align="center" bgcolor="#E6E6E6"><strong>Feedback</strong></td>
</tr>
<?php
while($row11=mysqli_fetch_array($sql11))
{
	$R_ID=$row11['Userid'];
	if($row11['Status']=='Approved')
	{
	?><tr>
<td align="center" width="6%" bgcolor="#FFFFFF"><a href="Ddetails.php?Userid=<?php echo $row11['Userid']; ?>"><?php echo $row11['Userid']; ?></a></td>
<td  width="15%" align="center" bgcolor="#FFFFFF"><?php echo $row11['Amount']; ?></td>
<td width="10%" align="center" bgcolor="#FFFFFF"><?php echo $row11['Duration']; ?></td>
<td   width="24%"  align="center" bgcolor="#FFFFFF"><?php echo $row11['Date_time']; ?></td>
<td width="64%" align="center" bgcolor="#FFFFFF"><?php echo "BID IS APPROVED" ?></td>
	<form name="f12" method="post" action="feedback.php?Userid=<?php echo $row11['Userid'];?>&Pid=<?php echo $Pid;?>">
<td align="center" width="64%" bgcolor="#FFFFFF"><input type="submit" name="feed" value="FEEDBACK" class="button button4"></a>	&nbsp;	&nbsp;	&nbsp;&nbsp;</td></form>
</tr>
</tr>
<?php

}
else if($row11['Status']=='Cancelled')
{
	
	?>

<tr>
	
<td align="center"  bgcolor="#FFFFFF"><a href="Sdetails.php?Userid=<?php echo $row11['Userid']; ?>"><?php echo $row11['Userid']; ?></a></td>

<td align="center" bgcolor="#FFFFFF"><?php echo $row11['Amount']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $row11['Duration']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $row11['Date_time']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo "BID IS CANCELLED" ?></td>
</form>
	<form name="f12" method="post" action="feedback.php?Userid=<?php echo $row11['Userid'];?>&Pid=<?php echo $Pid;?>">
<td align="center" width="64%" bgcolor="#FFFFFF"><input type="submit" name="feed" value="FEEDBACK" class="button button4"></a>	&nbsp;	&nbsp;	&nbsp;&nbsp;</td></form>
</tr>
</tr>
<?php
}
else
{
	?>
	<tr>
	<form name="f11" method="post" action="appbid.php?Userid=<?php echo $row11['Userid'];?>&Pid=<?php echo $Pid;?>">
<td align="center" width="6%"  bgcolor="#FFFFFF"><a href="Sdetails.php?Userid=<?php echo $row11['Userid']; ?>"><?php echo $row11['Userid']; ?></a></td>
<td align="center"  width="15%"  bgcolor="#FFFFFF"><?php echo $row11['Amount']; ?></td>
<td align="center" width="10%"  bgcolor="#FFFFFF"><?php echo $row11['Duration']; ?></td>
<td align="center"  width="24%" bgcolor="#FFFFFF"><?php echo $row11['Date_time']; ?></td>
<td align="center" width="64%" bgcolor="#FFFFFF"><input type="submit" name="apbtn" value="APPROVE" class="button button4"></a>	&nbsp;	&nbsp;	&nbsp;&nbsp;
<a href="deletebid.php?Userid=<?php echo $row11['Userid']; ?>&Pid=<?php echo $Pid;?>"><input type="button" name="cnbtn" value="CANCEL" class="button button4"></a></td></form>
	<form name="f12" method="post" action="feedback.php?Userid=<?php echo $row11['Userid'];?>&Pid=<?php echo $Pid;?>">
<td align="center" width="64%" bgcolor="#FFFFFF"><input type="submit" name="feed" value="FEEDBACK" class="button button4"></a>	&nbsp;	&nbsp;	&nbsp;&nbsp;</td></form>
</tr>
<?php
}
}
?>
</table>


<form name="f15" method="post" action="suggest.php">


<center><input type="submit" name="suggest"  value="Suggest appropriate Bidder" class="button button4">	&nbsp;	&nbsp;	&nbsp;&nbsp;
</center>

</form>

 








<?php
//mysql_close($con);
?>