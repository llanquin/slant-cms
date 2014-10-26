<?php 
	$con;

	/* Mysql Connection with parameters to ensure a secure connection */
	function open_db($conParams) {
		$con = mysqli_connect($conParams['hostname'], $conParams['username'], $conParams['password'], $conParams['database']);
	}
	
	
	function close_db() {
		mysqli_close($con);
	} 
?>