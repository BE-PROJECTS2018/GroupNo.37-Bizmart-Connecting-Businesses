<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/ppstyle.css">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

			<script src="../js/modernizr.custom.js"></script>
			
<title>BizMart</title>
<style>
header
{
	background-color:#fff;
	color:#009688 ;
	width:100%;
	height:60px;
	padding:5px 10px 20px 5px;
}
.dropdown-menu
{
	background-color:#ffffff;
}
footer
{
	background-color:#fff;
	color:#009688 ;
	width:100%;
	height:20%;
	padding: 10px 10px 20px 10px;
}

 input[type=text] {
	
	width: 230px;
	
    box-sizing: border-box;
    border: 2px solid  #999999;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
  
    background-repeat: no-repeat;
    padding: 3px 10px 3px 10px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
 }

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
    width: 70%;
	
}
.button {
    background-color:  #009688 ; 
    border: none;
    color: #ffffff;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
}
.button4 
{
	border-radius: 10px;
	}
</style>
<script type="text/javascript">
    $(function () {
        $("#chkuser").click(function () {
            if ($(this).is(":checked")) {
				 $("#dvuser").show();	
				   $("#txtUser").removeAttr("disabled");
                $("#txtUser").focus();
            } else {
                $("#dvuser").hide();	   
            }
        });
    });
	
	$(document).ready(function(){
    $("#rs").click(function(){
      $("#txtUser").attr("disabled", "disabled");
	        $("#txtProject").attr("disabled", "disabled");
			      $("#txtBudget").attr("disabled", "disabled");
  });
});
	
	
	
	  $(function () {
        $("#chkproject").click(function () {
            if ($(this).is(":checked")) {
				
				
				
                $("#dvproject").show();
				   $("#txtProject").removeAttr("disabled");
                $("#txtProject").focus();
            } else {
                $("#dvproject").hide();
            }
        });
    });
	
	$(function () {
        $("#chkbudget").click(function () {
            if ($(this).is(":checked")) {
                $("#dvbudget").show();
				   $("#txtBudgetMAX").removeAttr("disabled");
                $("#txtBudgetMIN").removeAttr("disabled");
                
				$("#txtBudgetMAX").focus();
            } else {
                $("#dvbudget").hide();
            }
        });
    });
</script>

</head>
<body bgcolor="#e6e6e6">
<?php 
session_start();
include('../header/conn.php');
include('../header/supplierheader.php');
$R_ID=$_SESSION['R_ID'];
?>
 <body  bgcolor="#e6ffff" style="overflow-y:auto;"  >
<form  action="demosearch.php" method="GET" align="center">
<br/><br/>
<header ><h3 align="center"> SEARCH FOR PROJECTS</h3></header>
<br><br><br>
<label>Project Type:&emsp;</label><select name="projtype" class="btn btn-default dropdown-toggle" class="dropdown" type="button" data-toggle="dropdown"  style="width:20%">
 <ul class="dropdown-menu ">
<li><option value="" disabled selected hidden>Please select the field</option></li>
<li><option value="home_appliances">Home appliances</option></li>
<li><option value="stationary">Stationary</option></li>
<li><option value="computerandaccessories">ComputerAndAccessories</option></li>
<li><option value="electronics">Electronics</option></li>
<li><option value="book">Book</option></li>
<li><option value="furniture">Furniture</option></li>
<option value="mobile">mobile</option>
    </ul>
</select>
<br><br><br>

	
<br>
<label for="chkuser">
    User Name:&emsp;<input type="checkbox" name="c1" value="name" id="chkuser" />
    &emsp;&emsp;&emsp;&emsp;
</label>
<div id="dvuser" style="display: none">
    Enter User Name:&emsp; 
    <input type="text" name="user" class="w3-round-xxlarge" id="txtUser" disabled="disabled" />
</div>
<label for="chkproject">
    Project Name:&emsp; <input type="checkbox" name="c2" value="Pname"id="chkproject" />
  &emsp;&emsp;&emsp;&emsp;
</label>
<div id="dvproject" style="display: none">
  Enter Project Name:
    <input type="text" name="project" class="w3-round-xxlarge" id="txtProject" disabled="disabled"/>
</div>
<label for="chkbudget">
    Budget:&emsp; <input type="checkbox" name="c3" value="Budget"id="chkbudget" />
  
</label>

<div id="dvbudget" style="display: none">
  Enter Budget:&emsp;&emsp;&emsp;
MAX:    <input type="number" name="budgetMax" id="txtBudgetMAX" disabled="disabled" />
MIN:  <input type="number" name="budgetMin" id="txtBudgetMIN" disabled="disabled" />


</div>
<br><br><footer >
<input type="submit" class="button button4 w3-hover-black w3-round-xlarge " value="SEARCH" name="srpr" align="left"></a>&emsp;&emsp;&emsp;&emsp;
<input type="reset" class="button button4  w3-hover-black w3-round-xlarge " value="RESET" id="rs" align="right"></a></footer>
</form>


<?php
//mysql_close($con);
?>
</body>

</html>
