<html>
<head>
<title>Confirm Email</title>

</head>

<?php
include "link.php";
$username=$_GET['username'];
$confirm_code=$_GET['code'];
$query="select * from user where confirm_code='$confirm_code' and name='$username'";
if(mysqli_query($link,$query)){
	$updatequery="update user set confirm_status=1 where name='$username' and confirm_code='$confirm_code'";
	mysqli_query($link,$updatequery);
}
else{
	echo "it has some error";
	
}










?>
</html>