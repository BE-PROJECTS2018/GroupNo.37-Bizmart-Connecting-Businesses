<html>
<head>

</head>
<body>
<?php
session_start();
$Pid=$_GET['Pid'];
$post_rating=$_POST['rating'];

$find_data=mysql_query("SELECT * FROM rates");
while($row125=mysql_fetch_assoc($find_data))
{
	$Pid=$row125['Pid'];
	$Bid=$row125['Bid'];
	$rating=$row125['rating'];
	$hits=$row125['hits'];
	
	echo"
	    <form action="rate.php" method="POST">
		
		<select name='rating'>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		
		</select>
		
		<input type="hidden" value='$Pid' name='Pid'>
		<input type="submit" value="Rate!"> <br>
	    This Supplier has Current rating :" ; echo $current_rating; echo"
		</form>
	
	";
}
?>
</body>
</html>