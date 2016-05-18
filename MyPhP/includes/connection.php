<?php
	$dbhost = 'mysql4.000webhost.com';
	$dbuser = 'a4737935_root';
	$dbpass = 'k969555';
	$db =  'a4737935_DB';

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);


	if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

?>