<?php 

session_start();
//include('../header/supplierheader.php');

include('../header/conn.php');

?>
<?php


$R_ID=$_GET["Userid"];
//echo $R_ID; 
	$sql13="INSERT INTO feedbacksys1(Userid,Rate)VALUES('$R_ID','$_POST[f3]')";
if (!mysqli_query($connect,$sql13))
  {
  die('Error: ' . mysqli_error());
  }
  else
  {
	  ?>
	  <script>
		alert('Thanks For Feedback');
		</script>
		<?php 
		$select_query2="select type from signup where Userid='$R_ID'";
$fetch2=mysqli_query($connect,$select_query2);
while($row2=mysqli_fetch_array($fetch2))
{
	if($row2['type']=='buyer')
	{
					?>
					<script>window.location.href='../pl/buyerhome.php';
        </script>
 <?php
	}
	else
	{
			?>
					<script>window.location.href='../pl/supplierhome.php';
        </script>
<?php	}
}	
	 }?>