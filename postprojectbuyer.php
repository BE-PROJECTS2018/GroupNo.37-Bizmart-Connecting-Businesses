<?php
include '../header/buyerheader.php';
?>
<html>
<head>
<style>
.w3-container
{
	background-color:#fff;
	color:#009688 ;
}
#heading
	{
	background-color:#fff;
		font-size:20px;
		color:#009688 ;
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
<meta charset="UTF-8"><!--doubt-->
<meta name="viewport" content="width=device-width, initial-scale=1"><!--doubt--->
<link rel="stylesheet" href="../css/w3.css"><!--doubt-->
<link rel="stylesheet" href="../css/bootstrap.min.css"><!--doubt-->
<script src="../js/jquery.min.js"></script><!--doubt-->
<script src="../js/bootstrap.min.js"></script><!--doubt-->
<link href="../css/hover.css" rel="stylesheet" media="all"><!--doubt-->
<script src="../js/modernizr.custom.js"></script><!--doubt-->
    <script>
    function add_fields(){
   var d = document.getElementById("content"); 
   d.innerHTML += "<br><span><input class='w3-input w3-animate-input w3-border' name='w2' type='text' placeholder='Enter product name(Product type, Brand)' style='width:60%' value=''  /></span>";
}        
</script>

<title>Bizmart</title>

</head>

<body>

<!--doubt--><header  class="w3-container w3-center w3-grey" style="background-color:#fff !important;"><h3  id="heading" class="w3-center"><strong>PRODUCT DETAILS</strong></h3></header>
<form action="postprbuyer.php" name="f5" method="post">
<div class="w3-container"><fieldset><!---doubt-->
<legend>Specify your requirements</legend>
<br><label style="font-size:16px;padding:0 10px 0 0">Select Category</label>
<select name="w1" class="w3-input w3-animate-input w3-border" style="width:60%" required>

<option value="" disabled selected hidden>Please select the field</option>


<option value="home_appliances">Home Appliances</option>
<option value="stationary">Stationary</option>
<option value="Computer_and_accessories">Computer and Accessories</option>
<option value="electronics">Electronics</option>
<option value="books">Books</option>
<option value="Furniture">Furniture</option>
    

</select></fieldset><br>
<fieldset><legend>What are the Expectations from Supplier?</legend><br>
<label style="font-size:16px;padding:0 10px 0 0">Product type and preferred Brand..</label>
    <div id="content">
        <input class="w3-input w3-animate-input w3-border" style="width:60%" type="text" name="w2" value="" placeholder="Enter product name(Product type, Brand)" required> 
    </div><br>
        <input type="button" class="w3-btn w3-large w3-hover-black hvr-round-corners w3-light-grey" id="more_fields" onclick="add_fields();" style="background-color:#009688 !important" value="Add More Products" />

</fieldset>
<fieldset><legend>Requirements</legend>
<label style="font-size:16px;padding:0 10px 20px 0">Quantity</label>
<input   class="w3-input w3-animate-input w3-border" style="width:60%" type="text" name="w3" value="" placeholder="Enter the number" required><br>
<label style="font-size:16px">Product Decsription</label><br>
<textarea class="w3-input w3-animate-input w3-border"  style="width:60%" rows="5" cols="10" name="tr1" placeholder="Describe your expectation from product" required></textarea><br>
</fieldset>
<fieldset ><legend>Budget</legend><br> <div id="platformRating">
<label style="font-size:16px;padding:0 10px 20px 0">Minimum Budget  <br/></label><input class="w3-input  w3-animate-input w3-border" style="width:40%" type="number" name="w4" value="" placeholder="Budget" required></input><select name="currency" class="btn btn-default dropdown-toggle" class="dropdown" type="button" data-toggle="dropdown"  style="width:15%">
 <ul class="dropdown-menu ">

<li><option value="Rupee">&#x20B9;</option></li>
<li><option value="Pound">&#xa3;</option></li>
<li><option value="EURO">&#x20AC;</option></li>
<li><option value="DOLLAR">&#x24;</option></li>
<li><option value="Lira">&#x20a4;</option></li>
    </ul>
</select><br></div></fieldset><br/>
<fieldset><legend>Project Duration</legend></fieldset>
<label style="font-size:16px;padding:0 10px 0 0">Work Period  </label><select class="w3-input w3-border" style="width:60%" name="w5" required>
<option value="" disabled selected hidden>please select the period</option>
<option value="Less Than Week">Less Than Week</option>
<option value="1-2Weeks">1-2Weeks</option>
<option value="3-4Weeks">3-4Weeks</option>
<option value="Above 4Weeks">Above 4Weeks</option>
</select><br><br></div><div  class="w3-container w3-center w3-grey " style="height:60px;padding:10px 0 10px 0;background-color:#fff !important;">
<button class="w3-btn w3-large w3-hover-black hvr-round-corners w3-light-grey" type="submit" name="w6" value="SUBMIT" style="background-color:#009688 !important" >SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="w3-btn  w3-large w3-hover-black hvr-round-corners w3-light-grey" type="reset" name="w7" value="CLEAR" style="background-color:#009688 !important">RESET</button></div>
<br>
</body>
</html>



