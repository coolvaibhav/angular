<?php  
include  "../includes/connection.php";
$first_name=mysql_real_escape_string($_POST['first_name']);
$last_name=mysql_real_escape_string($_POST['last_name']);
$user_email=mysql_real_escape_string($_POST['user_email']);
$user_password=base64_encode(mysql_real_escape_string($_POST['user_password']));
$date=date("Y-m-d");
$insert="INSERT INTO `users` (
`user_id` ,
`first_name` ,
`last_name` ,
`user_email` ,
`user_password` ,
`date`
)
VALUES (
NULL , '$first_name', '$last_name', '$user_email', '$user_password', '$date'
);";
if(mysql_query($insert))
echo 1;
else {
	echo 0;
}


?>