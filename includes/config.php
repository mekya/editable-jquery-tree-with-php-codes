<?php
/**************************************
 *   File Name: config.php
 *   Begin: Thursday, June, 06, 2006
 *   Author: Ahmet Oguz Mermerkaya 	
 *   Email: ahmetmermerkaya@hotmail.com
 ***************************************/ 

if (!defined("IN_PHP"))
{
	die();
}

// database host
$dbHost = "localhost";   
// database user name
$dbUsername = "root";
// password to connect to database
$dbPassword = "21236161";
// database name
$dbName = "eyillik_demo";

define ("TREE_TABLE_PREFIX", "tree");

// if you want to run it in demo mode, enable the macro below...
//define("DEMO_MODE", true);

define ("FAILED", "-1");  // Don't edit
define ("SUCCESS", "1");  // Don't edit

error_reporting(0);

?>