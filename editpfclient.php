<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title>BizMart</title>
<?php 

include '../header/conn.php' ;


?>
</head>
<body

<?php
session_start();
include '../header/buyerheader.php';
$R_ID=$_SESSION['R_ID'];
echo $_SESSION['R_ID'];

if(isset($_POST['edit']))	
{
	$select_query="select name,email,contact from signup where Userid='$R_ID'";
	echo $select_query;
	$fetch=mysqli_query($connect,$select_query);
	while($row1=mysqli_fetch_array($fetch))
	{

	//echo $row1['name'];
		if($row1['name']==$_POST['m10']&&$row1['contact']==$_POST['m12'])
		{
			?>
			
			<script>
				alert('No changes done');
				window.location.href='../buyerbid/profileclient.php';
			</script>

		<?php
		}
				
		else
		{	
			$rn=$_POST['m10'];
	
			$rcont=$_POST['m12'];
	
			$update_query="update signup set name='$rn',contact='$rcont',date=Current_time() where Userid='$R_ID'";
			//echo $update_query;
			mysqli_query($connect,$update_query);
 
		?>
		<script>
		alert(' details successfully updated');
       window.location.href='../buyerbid/profileclient.php';
        </script>
		
		<?php
		
		}
		
		
	
	}			
				
		
}		
?>

</body>
</html>