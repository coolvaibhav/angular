<?php  
include  "includes/connection.php";

$select="SELECT *
FROM `category`
WHERE `status`= '1'";

$result= mysql_query($select) or die(mysql_error());
 
$list=array();
 while ($row=mysql_fetch_assoc($result))
 {
     $list[]=$row;
 }

echo json_encode($list);