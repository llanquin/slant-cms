<?php
	
	/* slant-cms config file
	========================
	This is the central configiguration file.
	Everything that's changeable is here. */
	
	
	/* MySQL connection
	=================== */
	$connectionParams = [
		"hostname"		=> "localhost",
		"database"		=> "slantcms",
		"username"		=> "root",
		"password"		=> "",
	];

	/* General settings
	=================== */
	$settingsGeneral = [
		"title"			=> "My slant-cms",
		"slogan"		=> "Minimalistic, lightwheight blogging system.",
	];

	/* Miscellaneous
	================ */
	$allowedSites = [
		"home",
		"categories",
		"login",
		"logout",
	];

?>