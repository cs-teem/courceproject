<?php
session_start();
if(isset($_SESSION['login'])){
unset($_SESSION['login']);
header('location:login.php');
}
else if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
	header('location:loginadmin.php');
}

?>