<!DOCTYPE html>
<html>
<head> 
<style>
#design
{
	color:#ffffff;
}
	#tabcaption
{
	background-color:#fff;
color:#009688;
	font-size:20px;
	
}

</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../css/w3.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
<?php include('../header/conn.php');
include('../header/supplierheader.php');?>
<?php

session_start();
$R_ID=$_SESSION["R_ID"];

//for drop down

  $query="SELECT * FROM propostdet1";
	if(isset($_GET['projtype']))
	{
		$ptype=$_GET['projtype'];
		
		 $query=$query." WHERE Ptype='".$ptype."'";
		
}
else
{
	$ptype=null;
}

	if(isset($_GET['c1']) && isset($_GET['c2']))
	{
	

	$allow="2";

	}
	else 	if(isset($_GET['c1']) || isset($_GET['c2']))

	{
	

	$allow="1";

	}
	else
	{


	$allow="0";
	}

if($allow==1)
{
	if(isset($_GET['c1']))
	{
		if(isset($_GET['projtype']))
		{
		
		 if(isset($_GET['user']))
		{
			$uname=$_GET['user'];
	
		}
		
	
	 $query=$query." AND Userid IN (SELECT Userid FROM signup WHERE  name LIKE  '".$_GET['user']."%')";
		
		
		}
		else
		{
			
	 $query=$query." WHERE Userid IN (SELECT Userid FROM signup WHERE  name LIKE  '".$_GET['user']."%')";
		
		}

		
		$_c1=$_GET['c1'];
	
		
	}



	
	//second check box

if(isset($_GET['c2']))
	{
$_c2=$_GET['c2'];
		if(isset($_GET['project']))
		{
if(isset($_GET['projtype']))
		{
		
		 if(isset($_GET['project']))
		{
			$uname=$_GET['project'];
	
		}
		
	$query=$query." AND Pid IN (SELECT Pid FROM propostdet1 WHERE  Pname LIKE  '".$_GET['project']."%')";
		
		
		}
		else
		{
			
	 $query=$query." WHERE Pid IN (SELECT Pid FROM propostdet1 WHERE  Pname LIKE  '".$_GET['project']."%')";
		
		}

		
		}	




}
//and add budget 
if(!(empty($_GET['budgetMax']) || empty($_GET['budgetMin'])))
	{
			

	$query=$query." AND Budget BETWEEN ".$_GET['budgetMin']." AND ".$_GET['budgetMax'];

}
else if(!empty($_GET['budgetMax']) || empty($_GET['budgetMin']))
		{
	if(!empty($_GET['budgetMax']))
			{
				

 $query=$query." AND Budget BETWEEN 0 AND ".$_GET['budgetMax'];

	}
	else if(!empty($_GET['budgetMin']))
			{
					

$query=$query." WHERE Budget >= ".$_GET['budgetMin'];

			}
			}


	}

	

//allow =2
if($allow==2)
{

if(isset($_GET['projtype']))
		{
		
		 if(isset($_GET['user']))
		{
			$uname=$_GET['user'];
	
		}
		
	
		$query=$query." AND Userid IN (SELECT Userid FROM signup WHERE  name LIKE  '".$_GET['user']."%')";
		
		
		}
		else
		{
			
		 $query=$query." WHERE Userid IN (SELECT Userid FROM signup WHERE  name LIKE  '".$_GET['user']."%')";
		
		}

	
 $query=$query." OR Pid IN (SELECT Pid FROM propostdet1 WHERE  Pname LIKE  '".$_GET['project']."%')";


if(!(empty($_GET['budgetMax']) || empty($_GET['budgetMin'])))
	{
			

	$query=$query." AND Budget BETWEEN ".$_GET['budgetMin']." AND ".$_GET['budgetMax'];

}
else if(empty($_GET['budgetMax']) || empty($_GET['budgetMin']))
		{
	if(!empty($_GET['budgetMax']))
			{
					

 $query=$query." AND Budget BETWEEN 0 AND ".$_GET['budgetMax'];

	}
	else if(!empty($_GET['budgetMin']))
			{
				

$query=$query." AND Budget >= ".$_GET['budgetMin'];

			}
			}








}

//if only buddegt is checked

if($allow=="0")
{
//check both are empty or not if not go further

if(!(empty($_GET['budgetMax']) || empty($_GET['budgetMin'])))
	{
//echo"@";

if(isset($_GET['projtype']))
		{

	

	 $query=$query." AND Budget BETWEEN ".$_GET['budgetMin']." AND ".$_GET['budgetMax'];

}
else
		{
	

 $query=$query." WHERE Budget BETWEEN ".$_GET['budgetMin']." AND ".$_GET['budgetMax'];
}


}

else
	{
//only max value are given

if(!empty($_GET['budgetMax']))
{
	if(isset($_GET['projtype']))
	{
	

	 $query=$query." AND Budget BETWEEN 0 AND ".$_GET['budgetMax'];

	}
	else
	{
	

	 $query=$query." WHERE Budget BETWEEN 0 AND ".$_GET['budgetMax'];

	
	}


}

//only min values are given..

if(!empty($_GET['budgetMin']))
{
if(isset($_GET['projtype']))
	{
	

	 $query=$query." AND Budget >= ".$_GET['budgetMin'];

	}
	else
	{


 $query=$query." WHERE Budget >= ".$_GET['budgetMin'];

	
	}
}




}

}

//run  the query.....

$result=mysqli_query($connect,$query);
		if($result)
		{
		
		//echo "number of records:".mysql_num_rows($result);
		}
		else
		{
			//echo "fail";
			
			}

	?>
	<body>
<table class="table table-condensed table-hover w3-bordered" style="position:relative !important; top:10%;">
<tr><td  id="tabcaption" colspan="8" align="center">PROJECTS SEARCHED BY YOU</td></tr>
<tr>
<td class="w3-teal" id="design"><b>ID</b></td>
<td  class="w3-teal" id="design"><b>Type</b></td>
<td  class="w3-teal" id="design"><b>Name</b></td>
<td   class="w3-teal" id="design"><b>Quantity</b></td>
<td  class="w3-teal" id="design"><b>Description</b></td>
<td  class="w3-teal"  id="design"><b>Budget</b></td>
<td  class="w3-teal" id="design" ><b>Duration</b></td>
<td class="w3-teal" id="design" ><b>Date_time</b></td>
</tr>
	<?php
while($row05=mysqli_fetch_array($result))
{
?>
<tr>
 <td class="w3-light-grey"><a data-toggle="tooltip" data-placement="right" title="View Project Details" href="projdet.php?Pid=<?php echo $row05['Pid']; ?> "><?php echo $row05['Pid']; ?></a></td>
 <td class="w3-light-grey"><?php echo $row05['Ptype']; ?></td>
 <td class="w3-light-grey"><?php echo $row05['Pname']; ?></td>
 <td class="w3-light-grey"><?php echo $row05['Quantity']; ?></td>
 <td class="w3-light-grey"><?php echo $row05['Pdesp']; ?></td>
 <td class="w3-light-grey"><?php echo $row05['Budget']; ?></td>
 <td class="w3-light-grey"><?php echo $row05['Duration']; ?></td>
 <td class="w3-light-grey"><?php echo $row05['Date_time']; ?></td></tr>
<?php echo "<br />";
}
?>
</table>
</body>
<?php
if(isset($_GET['c3']))
	{
$_c3=$_GET['c3'];
		if(isset($_GET['budget']))
		{
			$max_budget=$_GET['budget'];
			
		}
	}
	?>
