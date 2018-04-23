<?php
@session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/w3.css">
<!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
<title>BizMart</title><!-- Script by hscripts.com -->
</HEAD>
<BODY>
<nav class="w3-sidenav w3-collapse w3-teal w3-card-2 w3-animate-left" style="display:none;">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav  w3-large w3-hover-black ">Close &times;</a>

  <a href="../../../pl/developerhome.php" class="w3-hover-black"><label class="w3-text-sand w3-hover-text-white">HOME</label></a>
  <a href="../../../client_bid/allprojectsclient.php" class="w3-hover-black"><label class="w3-text-sand w3-hover-text-white">DASHBOARD</label></a>
  <a href="../../../client_bid/bidprojects.php" class="w3-hover-black"><label class="w3-text-sand">PROJECT BID BY ME</label></a>
  <a href="../../../client_bid/profileclient.php" class="w3-hover-black"><label class="w3-text-sand">PROFILE</label></a>
  <a href="../../../client_bid/searchproj.php" class="w3-hover-black"><label class="w3-text-sand">SEARCH PROJECTS</label></a>
   <a href="../../../exam/selection.php" class="w3-hover-black"><label class="w3-text-sand">EXAM</label></a>
   <a href="../../../chat/scripts/php/chat_home.php" class="w3-hover-black"><label class="w3-text-sand">CHAT</label></a>
   <form name="f18" method="post" action="feedbacksys.php?Userid=<?php echo $_SESSION["R_ID"];?>">
<a href="../../../client_bid/feedbacksys.php ?Userid=<?php echo $_SESSION["R_ID"]; ?>" class="w3-hover-black"><label class="w3-text-sand">FEEDBACK</label></a></form><!--for both-->
  

</nav>
<div class="w3-container w3-teal"><h4 class="w3-center" style="padding:0 0 0 2px" >
</h4>
  <span class="w3-opennav w3-xlarge" onclick="w3_open()">&#9776;</span>
  <a href="../../../pl/developerhome.php" style="text-decoration: none !important;color: #fff !important;"><span style="font-size: 30px !important; ">BizMart</span></a>
<h4 class="w3-right"><a href="../../../header/logout.php" style="color: #fff !important; text-decoration: none ;!important;cursor:ppointer; ">Logout</a></h4>
</div> 
<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>
</body>
</head>
</html>