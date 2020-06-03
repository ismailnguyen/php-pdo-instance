<?php
	/* Enable debugging errors (Set this value to false on production environment) */
	define("DEBUG", true);

	/* Database host name (eg. localhost) */
	define("DB_HOST", "");
	
	/* Database username (eg. root) */
	define("DB_USER", "");
	
	/* Database password (leave empty if there is no password) */
	define("DB_PASSWORD", "");
	
	/* Database name */
	define("DB_NAME", "");

	if(DEBUG)
	{
		ini_set('display_errors', 'On');
		error_reporting(E_ALL);
	}
?>