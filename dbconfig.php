<?php
	
	$db_hostname='127.0.0.1';
	$db_username='root';
	$db_password='';
	$db_name='student_info';
	$dbc=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
	if(mysqli_connect_errno())
	{
		echo "connection not established";
		exit;
	}

?>