<html>
<head>
<title>List</title>

<link rel="stylesheet" type="text/css" href="list.css">
</head>
<body>
<?php  include'include/header.php';?>
<div id="container">
 <u> Subject Details </u>
 
<table>

  <tr>

    <th>Subject_ID</th>
	<th>Subject Name</th> 
	  </tr>
	   
<?php
include"database.php";
$query = "select Subject_id,Subject From subject";
$fetch=mysqli_query($connect,$query);


while($row = mysqli_fetch_assoc($fetch))
{


		$subject_id = $row['Subject_id'];
	    $subject = $row ['Subject'];
	
	
	echo " <br>
	<tr> <td>$subject_id </td> 

     <td>$subject </td> </tr>
	";

	
}


?>
</div>
<table>

</body>
</html>