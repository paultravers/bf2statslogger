<?php

/* 
 * Some options you can set.
 * You can use this package without editing these files, 
 * but it would be wise to set a MySQL server to help
 * reduce the load on EA's servers. Be nice.
 *
 * Rename the file to "BF2Stats-config.php" to use it ;)
 */

if( $this ) {

	// If you want this to use a MySQL server, populate these fields:
	$this->db_name = ''; // Database name
	$this->db_user = ''; // User login
	$this->db_pass = ''; // User pass
	$this->db_srvr = 'localhost'; // Probably (99%) 'localhost'
	$this->prefix  = ''; // should be fine.

	$this->refresh_every_minutes = '0'; 	
							// if using mysql, this will refresh the stats
							// from the website at this interval I doubt 
							// anything lower than 10 is necessary.
											
	$this->debug = false;
							// set to "true" to see debug output.
	
	$this->allowedPID = ''; 
							// If you'd like to limit who may use this, you can 
							// set a comma separated list of player names/ID's 
							// that the stat package will allow lookup for. EG:
							// 'tf-hitman,tf-afrojap,43917103'
	
	$this->bannedPID = ''; 
							// The opposite of allowerPID, you can use this
							// to filter out certain players/PID's EG:
							// 'tf-hitman,tf-afrojap,43917103'
	
	$this->useFileFunction = true;
							// Use the file() function if true, otherwise use CURL
							// If you know you can't use the file() funtion, setting this to
							// false will save you some server load.
											
	global $resources_dir;
	$resources_dir  = './resources';
							// the url to the resources folder 
							// useful if you host the images, etc off site.
							// no trailing slash please.
											
}

?>
