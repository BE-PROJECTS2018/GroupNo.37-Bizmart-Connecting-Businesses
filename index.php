<?php
session_start();
?>
<html>
<head>
<title> Login </title> 
<link rel="stylesheet" type="text/css" href="index.css">


<body>

<?php
include 'include/header.php';
include "database.php";
//error_reporting(0);
extract($_POST);


if(isset($submit))
{	$select_query="select * from admin where username='$username' and password='$password'";
	//echo $select_query;
	$fetch=mysqli_query($connect,$select_query);
	
	if(mysqli_num_rows($fetch)<1)
	{
		$found="N";
	}
	else
	{
		//echo "hi";
		$_SESSION['username']=$username;
		//echo $_SESSION['username'];
		header("Location:detail.php");
	}



if(isset($_SESSION['username']))
{
	header("Location:detail.php");
}

}

?>	 
<h1><u>Admin Login</u></h1>

<div class="container">
<form method="POST" action="" name="admin">
	
<div class="form-input">
<input type="text" name="username" placeholder="Enter your username">
</div>
 <div class="form-input">
<input type="password" name="password" placeholder="Enter your password">
 </div>
 <?php
    if(isset($found))
		  {
		  	echo "<br><h3>Invalid Username or Password</h3>";
		  }
?>
 <br><br>  <input name="submit" type="submit" id="submit" value="Login"><br>
<br>

<?php
// remove all session variables


// destroy the session 

?>
 </div>
</body>
</html>





