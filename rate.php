<html>
<head></head>
<body>
<?php
session_start();
$Pid=$_GET['Pid'];
//$Bid=$_POST['Bid'];
$post_rating=$_POST['rating'];

$find_data=mysql_query("SELECT Pid from biddet1 WHERE Pid='$Pid' ");
while($row121=mysql_fetch_assoc($find_data))
{
	$Pid=$row121['Pid'];
	$current_rating=$row121['rating'];
	$current_hits=$row121['hits'];
}

$new_hits=$current_hits + 1;
$update_hits=mysql_query("UPDATE rates SET hits='$new_hits' WHERE Pid='$Pid' ");


$pre_rating=$current_rating	+$post_rating;
$new_rating=$pre_rating / $new_hits;
$update_rating=mysql_query("UPDATE rates SET rating='$new_rating' WHERE Pid='$Pid' ");

?>





</body>
</html>