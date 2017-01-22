<?php
	//error_reporting(0);
	$db_host = 'localhost';
	$db_user = 'root';
	$db_password = 'pass';
	$db_name = 'user_info';
	
	$link = new MySQLi($db_host, $db_user, $db_password, $db_name);
	if ($link->connect_error) {
    	die('<p style="color:red">'.$link->connect_errno.' - '.$link->connect_error.'</p>');
	}
	
	$link->query("SET NAMES utf8");
		
	echo "<p>Вы подключились к MySQL!</p>";

?>