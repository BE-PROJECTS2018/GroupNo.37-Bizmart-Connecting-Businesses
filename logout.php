<?php


session_start();
include "../include/conn.php";

if(isset($_SESSION["R_ID"])&&($_SESSION["R_name"])) 
{
	
	unset($_SESSION["R_ID"]);
	unset($_SESSION["R_name"]);
	session_destroy();

}	


?>