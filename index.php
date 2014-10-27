<?php
	require 'inc/_config.php';
	
	$con = new mysqli($connectionParams['hostname'], $connectionParams['username'], $connectionParams['password'], $connectionParams['database']);
	require 'inc/dbfunctions.php';

	include 'templates/header.php';

	$calledSite = $_GET['site'];
	if( isset($calledSite) && in_array($calledSite, $allowedSites) && file_exists('templates/' . $calledSite . '.php') ) {
		include 'templates/' . $calledSite . '.php';
	} elseif( !isset($calledSite) ) {
		include 'templates/home.php';
	} else {
		include 'templates/404.php';
	}

	include 'templates/footer.php';

	$con->close();
?>
