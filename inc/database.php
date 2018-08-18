<?php

try {
	//$db = new PDO("mysql:host=localhost;dbname=leafonlinestore;port=3306","root","");
	$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
	// set the PDO error mode to exception
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to the database";
	exit;
}


//sku=stock keeping unit
// sql injection