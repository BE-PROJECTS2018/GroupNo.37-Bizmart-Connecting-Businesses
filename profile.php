<!DOCTYPE html>
<html>
<head> 
<style>
.button {
    background-color: #009688 ; 
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
.button4:hover
{
	background-color: #000000; 
	color:#ffffff;
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
#hdesign
{
	background-color:#009688;
	color:#fff;
}
#fdesign
{
background-color:#009688;
}
label
{
	text-align:left;
}

</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/icon.css">
<title>Bizmart</title>
<?php include('../include/conn.php');
include('../include/header.php');?>
 </head><body  bgcolor=" #d9d9d9" style="overflow-y:auto;">

<?php
session_start();
$R_ID=$_SESSION['R_ID'];
$sql122=mysql_query("select R_name,R_email,R_contact,file from register where R_ID='$R_ID' ;",$con);
?>


<?php
while($row122=mysql_fetch_array($sql122))
{?>

<div id="card" class="w3-card-2 ">
<div class="w3-container" id="hdesign" ">
  <h3 align="center">MY PROFILE</h3>
</div>
<div class="w3-container" style="background-color:#fff !important;"align="center">
<label ><i class="material-icons">&#xe63d;</i>Name:</label><?php echo $row122['R_name'];?><br>
<label><i class="material-icons">&#xe158;</i>Email-ID:</label><?php echo $row122['R_email']; ?><br>
<label><i class="material-icons">&#xe0cd;</i>Contact-NO:</label><?php echo $row122['R_contact']; ?><br>
<label><i class="material-icons">&#xe410;</i>Profile-PIC:</label><br><a href="../uploads/<?php echo $row122['file']; ?>" target="_blank"><img src="../uploads/<?php echo $row122['file']; ?>" height="150" width="150" /></a>
<!--<a href="../uploads/<?php echo $row122['file'] ?>" target="_blank">view pic</a></td>--></i><br><br>
<a  href="../buyerbid/editprofile.php"><input class="button button4" type="submit" value="EDIT PROFILE" align="center"></a><br><br></div>
<footer  id="fdesign" class="w3-container " align="center">
  <h5>Please do not misuse the number</h5>
</footer></div>
<?php
}
mysql_close($con);

	
		?>
		
    
</body>
</html>
