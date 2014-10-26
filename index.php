<?php
	require_once 'inc/_config.php';
	require_once 'inc/db.php';
	require_once 'inc/global.php';

	open_db($connectionParams);

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

	close_db();
?>
