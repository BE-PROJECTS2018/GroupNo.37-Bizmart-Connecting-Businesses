

<?php
session_start();
?>

<?php

include'database.php';
/*$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	
	echo "Could Not Connect to Server";
}
if(!mysqli_select_db($con,'quiz'))
{
		echo "Could Not Connect to Database";
}
*/
if($_SESSION['s_id'] && $_SESSION['sub_name'])
{
$Question = $_POST['question'];
$Answer1 = $_POST['answer1'];
$Answer2 = $_POST['answer2'];
$Answer3 = $_POST['answer3'];
$Answer4 = $_POST['answer4'];
$Correct = $_POST['correct'];
$sql = "INSERT INTO quiz(Question,Answer1,Answer2,Answer3,Answer4,Correct,Subject_id,Subject) VALUES ('$Question','$Answer1','$Answer2','$Answer3','$Answer4','$Correct','$_SESSION[s_id]','$_SESSION[sub_name]')";

if(!mysqli_query($connect,$sql))
{
	echo 'Not Inserted';	
}
else
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Question added to Question paper code ".$_SESSION['s_id']." and Subject name as ".$_SESSION['sub_name']."')
	window.location.href='detail.php';

	</SCRIPT>");      

}
}
else
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert(' First set Question set paper code')
	    window.location.href='detail.php';

	</SCRIPT>");      

}

$sql1="INSERT INTO subject VALUES('$_SESSION[s_id]','$_SESSION[sub_name]')";
if(!mysqli_query($connect,$sql1))
{
	echo 'Not Inserted';	
}
?>
<html>
<head>
</head>
<body>
</body>
</html>