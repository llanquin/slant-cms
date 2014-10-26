<?php
	
	/* slant-cms Config File
	========================
	This is the central configiguration file.
	Everything that's changeable is here. */
	
	
	/* MySQL connection
	=================== */
	$connectionParams = [
		"hostname"		=> "",
		"database"		=> "",
		"username"		=> "",
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