<?php  
include  "../includes/connection.php";
$user_email=mysql_real_escape_string($_POST['user_email']);
$password=base64_encode(mysql_real_escape_string($_POST['user_password']));
$select="SELECT *
FROM `users`
WHERE `user_email`= '$user_email'
AND `user_password` = '$password'";

$result= mysql_query($select);
 $row=mysql_fetch_array($result);
 
if(!(empty($row)))
{
	session_start();
	$user_account=array(
	"first_name"=> $row['first_name'],
	"last_name"=> $row['last_name'],
	"user_email"=> $row['user_email'],
	);
	echo json_encode(array('status'=>'1','user_account'=> $user_account));

}
else {
	echo json_encode(array('status'=>'0'));
}


?>