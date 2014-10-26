<?php 
	$con;

	/* Mysql Connection with parameters to ensure a secure connection */
	function open_db($hostname, $database, $username, $password) {
		$con = mysqli_connect($hostname, $username, $password, $database);
		if (!$con) {
			return false;
		}	
		return $con;
	}
	
	
	function close_db($con) {
		mysqli_close($con);
	} 
?>