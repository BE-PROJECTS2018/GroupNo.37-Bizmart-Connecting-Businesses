<?php
function get_msg($sender,$receiver)
{
	include('conn.php');
//echo $sender;
//echo $receiver;

$query="SELECT Sender , Message ,Time FROM chat1 WHERE ((Sender='$sender' AND Receiver='$receiver') OR (Sender='$receiver' AND Receiver='$sender') ) AND Pid=".$_SESSION["c_p_id"]."  ORDER BY Msg_id";



$run=mysqli_query($connect,$query);
if($run)
	{
		//echo"allow";
}
else{echo ":notttttttttttttttt";}


$messages=array();

while($message=mysqli_fetch_assoc($run))
	{

$messages[]=array('sender' => $message['Sender'],
	                'message' => $message['Message'],
					'time' =>date('h:i a m/d/Y', strtotime($message['Time'])));
}

return $messages;

}

function send_msg($sender,$message,$receiver)
{
include('conn.php');
if(!empty($sender) && !empty($message))
	{
   $sender=mysqli_real_escape_string($connect,$sender);
   $message=mysqli_real_escape_string($connect,$message);
$pid=$_SESSION["c_p_id"];

$query="INSERT INTO chat1 VALUES (null,'$sender','$message','$receiver',now(),'$pid')";
echo $query;

if($run=mysqli_query($connect,$query))
		{
			//echo 'sdvav';
return true;
}

else
		{

echo" fail to send retry..";
return false;}

}
else
	{
echo $sender;
echo "nest <br>";
echo $message;
echo $receiver;
echo"cant send empty msg";
return false;
}

}


//getting users for the drop down



function get_users($sender,$pid,$p_type)
{include('conn.php');
//echo $sender;


if($_SESSION["p_type"]=='1')
	{

$query="SELECT DISTINCT Userid  FROM biddet1 WHERE Pid=".$pid." AND Ownerid=".$sender;



$run=mysqli_query($connect,$query);
if($run)
	{//echo "allow";
}
else{echo "Fail to load relogin the account";}


$users=array();

while($user=mysqli_fetch_assoc($run))
	{




$users[]=array('receiver' => $user['Userid']);
}



}
else if($_SESSION["p_type"]=='0')
	{

$query="SELECT DISTINCT Ownerid FROM biddet1 WHERE Pid=".$pid." AND Userid=".$sender;



$run=mysqli_query($connect,$query);
if($run)
	{
	//echo "allow";
	}
else{echo "Fail to load relogin the account";}


$users=array();

while($user=mysqli_fetch_assoc($run))
	{




$users[]=array('receiver' => $user['Ownerid']);
}

return $users;


}

return $users;

}




//Group message functions:
//send a message

function send_grp_msg($sender,$message,$receiver)
{
include('conn.php');
if(!empty($sender) && !empty($message))
	{
   $sender=mysqli_real_escape_string($connect,$sender);
   $message=mysqli_real_escape_string($connect,$message);
//$pid=$_SESSION["c_p_id"];
$query="INSERT INTO group_chat1 VALUES (null,'$sender','$message','$receiver',now())";


if($run=mysqli_query($connect,$query))
		{
return true;
}

else
		{

echo" fail to send retry..";
return false;}

}
else
	{
echo $sender;
echo "nest <br>";
echo $message;
echo $receiver;
echo"cant send empty msg";
return false;
}

}



//receive a group message

function get_grp_msg($g_gid)
{include('conn.php');
//echo $sender;
//echo $receiver;

$query="SELECT g_sender , g_msg ,g_dom FROM group_chat1 WHERE g_gid='$g_gid'   ORDER BY g_msg_id";


//echo $query;
$run=mysqli_query($connect,$query);
if($run)
	{/*echo"allow";*/}
else{echo ":notttttttttttttttt";}


$messages=array();

while($message=mysqli_fetch_assoc($run))
	{

$messages[]=array('sender' => $message['g_sender'],
	                'message' => $message['g_msg'],
						'dt' => date('h:i a m/d/Y', strtotime($message['g_dom'])));
}

return $messages;

}





?>