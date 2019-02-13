<?php
$userid=$_GET['ID'];
echo $userid;
include "link.php";

$sql="select * from user where id='$userid'";
$query=mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($query)){
	echo $row['id']."</br>";
	echo $row['name']."</br>";
	echo $row['last_name']."</br>";
	echo $row['email']."</br>";
}



?>