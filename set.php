<?php
session_start();
?>
<?php

$p_id=$_POST['sub_id'];
$sub=$_POST['sub'];
 

$_SESSION['s_id']=$p_id;
$_SESSION['sub_name']=$sub;


/*session variable set for code now we use this for addind*/
/* agr iff wallaa cconditiioon hatay toh pehle set walla page khulta hai  agr nhi hotaya toh jo o/p chaiye woh par set.php k saath*/
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('quetion paper code ".$_SESSION['s_id']." and ".$_SESSION['sub_name']."')
	  if(choice == test){
	    window.location.href='main.php'; 
}
elseif(choice == practise){
	    window.location.href=''practisequestion.php'';
}

	</SCRIPT>");      
?>