<?php
	require_once 'inc/_config.php';
	
	include 'templates/header.php';

	$calledSite = $_GET['site'];
	if( isset($calledSite) && in_array($calledSite, $allowedSites) && file_exists('templates/' . $calledSite . '.php') ) {
		include 'templates/' . $calledSite . '.php';
	} else {
		include 'templates/404.php';
	}

	include 'templates/footer.php';
?>
