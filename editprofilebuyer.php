<!DOCTYPE html>
<html>
<head> 
<style>
.button {
    background-color: #a6a6a6; 
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
#main
{
padding:5% 0 0 5%;	
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
h3
{
	color:#ffffff;
}
</style>
<meta charset="UTF-8">

<title>Bizmart</title></head>
<link rel="stylesheet" href="../css/icon.css">
<link rel="stylesheet" href="../css/w3.css"><!--dt-->
<script class="jsbin" src="../js/jquery.min.js"></script><!--dt-->
<script class="jsbin" src="../js/jquery-ui.min.js"></script><!--dt-->

</style>
</head>

<body bgcolor="#d9d9d9">
<?php 
session_start();
$id=$_SESSION['R_ID'];
include '../header/conn.php';

$select_query2="select type from signup where Userid='$id'";
$fetch2=mysqli_query($connect,$select_query2);
while($row2=mysqli_fetch_array($fetch2))
{
	if($row2['type']=='buyer')
	{
			include'../header/buyerheader.php';
	}
	else
	{
			include'../header/supplierheader.php';
	}
}	


$select_query="select * from signup where Userid='$id'";
$fetch=mysqli_query($connect,$select_query);

?>
<?php

while($row1=mysqli_fetch_array($fetch))
{
?>
<form name="f10" action="editpfbuyer.php" method="post" enctype="multipart/form-data">
<div id="card" class="w3-card-2 ">
<div class="w3-container" id="hdesign" ">
  <h3 align="center">EDIT MY PROFILE</h3>
</div>
<div id ="main" class="w3-container" align="center">
<label ><i class="material-icons">&#xe63d;</i>Name:</label>&emsp;&emsp;&emsp;&emsp;<input type="text" name="m10"  value="<?php echo $row1['name']; ?>" required /><br>
<label><i class="material-icons">&#xe158;</i>Email-ID:</label>&emsp;&emsp;&nbsp;<input type="email" name="m11" value="<?php echo $row1['email']; ?>" disabled="disabled" /><br>
<label><i class="material-icons">&#xe0cd;</i>Contact-NO:</label>&emsp;<input type="text" name="m12" value="<?php echo $row1['contact']; ?>" required /><br>
<br><br>
<input type="submit" class="button button4" value="EDIT PROFILE" name="edit" align="left"></a>
<a href="profileclient.php"><input class="button button4" type="button" value="CANCEL" align="right"></a><br/><br/></div>
<footer  id="fdesign" class="w3-container " align="center">
  <h5>Please provide the correct details</h5>
</footer>
</div>
</form>

<?php
}
?>

</body>
</html>
