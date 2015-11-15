<?php
$hostname = "br-cdbr-azure-south-a.cloudapp.net";
$username = "b81932d30ec9c1";
$password = "38bb623d";
$database_name = "Workshop Azure";

$conn = mysql_connect($hostname, $username, $password) 
	or die ("Error menghubungkan ke host database");

$db = mysql_select_db($database_name) 
	or die ("Error menghubungkan ke database");
?>