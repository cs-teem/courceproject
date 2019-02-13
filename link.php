<?php
$user="root";
$server="localhost";
$password="";
$database="cource";
$link=mysqli_connect($server,$user,$password);
$select=mysqli_select_db($link,$database);



?>