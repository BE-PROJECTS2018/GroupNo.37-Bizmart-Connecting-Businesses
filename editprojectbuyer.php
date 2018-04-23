<!DOCTYPE html>
<html>
<head> 
<style>
.w3-container
{
color:#009688 ;
	background-color:#fff;
}
#heading
	{color:#009688 ;
	background-color:#fff;
	
		font-size:20px;
	}
	#platformRating {
  display: inline-block;
}
 #platformRating select,
  #platformRating .w3-input{
    display: inline;
    vertical-align: top;
    line-height: 28px;
	
  }
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"><!--dt-->
<link rel="stylesheet" type="text/css" href="../css/ppstyle.css">
<link rel="stylesheet" href="../css/w3.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
    <link href="../css/hover.css" rel="stylesheet" media="all">
			<script src="../js/modernizr.custom.js"></script>
<title>BizMart</title>
<?php 
include'../header/conn.php';
include'../header/buyerheader.php';
$Pid=$_GET['Pid'];
?>
</head>
<body>

<header  class="w3-container w3-center w3-grey" style="background-color:#fff !important;"><h3 id="heading" class="w3-center" style="background-color:#fff !important;">EDIT PRODUCT DETAILS</h3></header>
<form name="f7" method="post" action="../buyerbid/editprbuyer.php?Pid=<?php echo $Pid;?>" >
<div class="w3-container ">
<legend>Specify your requirements</legend>
<br><label style="font-size:16px;padding:0 10px 0 0">Select Category</label>
<select name="e1" class="w3-input w3-animate-input w3-border" style="width:60%" required>

<option value="" disabled selected hidden>please select the field</option>


<option value="home_appliances">Home Appliances</option>
<option value="stationary">Stationary</option>
<option value="Computer_and_accessories">Computer and Accessories</option>
<option value="electronics">Electronics</option>
<option value="books">Books</option>
<option value="Furniture">Furniture</option>

</select><br>
<legend>What are the Expectations from Supplier?</legend><br>
<label style="font-size:16px;padding:0 10px 0 0">Product type and preferred Brand..</label>
<input class="w3-input w3-animate-input w3-border" style="width:60%" type="text" name="e2" value="" placeholder="Enter project title" required><br>

<legend>Requirements</legend>
<label style="font-size:16px;padding:0 10px 20px 0">Quantity</label>
<input  class="w3-input w3-animate-input w3-border" style="width:60%" type="text" name="e3" value="" placeholder="Enter the number" required><br>
<label style="font-size:16px">Product Decsription</label><br>
<textarea class="w3-input w3-animate-input w3-border" style="width:60%" rows="5" cols="10" name="etr1" placeholder="Describe your expectation from product" required></textarea><br>

<legend>Budget</legend><br><div id="platformRating">
<label style="font-size:16px;padding:0 10px 20px 0">Minimum Budget  </label><input class="w3-input  w3-animate-input w3-border" style="width:40%" type="number" name="e4" value="" placeholder="Budget" required></input><select name="currency" class="btn btn-default dropdown-toggle" class="dropdown" type="button" data-toggle="dropdown"  style="width:15%">
 <ul class="dropdown-menu ">

<li><option value="Rupee">&#x20B9;</option></li>
<li><option value="Pound">&#xa3;</option></li>
<li><option value="EURO">&#x20AC;</option></li>
<li><option value="DOLLAR">&#x24;</option></li>
<li><option value="Lira">&#x20a4;</option></li>
    </ul>
</select></div><br/>
<legend>Project Duration</legend>
<label style="font-size:16px;padding:0 10px 0 0">Work Period  </label><select class="w3-input w3-border" style="width:60%" name="e5" required>
<option value="" disabled selected hidden>please select the period</option>
<option value="Less Than Week">Less Than Week</option>
<option value="1-2Weeks">1-2Weeks</option>
<option value="3-4Weeks">3-4Weeks</option>
<option value="Above 4Weeks">Above 4Weeks</option>
</select><br><br></div><div class="w3-container w3-center w3-grey" style="height:60px;padding:10px 0 10px 0 ; background-color:#fff !important;">
<button class="w3-btn w3-large hvr-round-corners w3-light-grey w3-hover-black" type="submit" name="e6" value="SUBMIT" style="background-color:#009688 !important;">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="w3-btn  w3-large  hvr-round-corners w3-light-grey w3-hover-black" type="reset" name="e7" value="CLEAR" style="background-color:#009688 !important;">RESET</button></div>
<br>
</body>
</html>
