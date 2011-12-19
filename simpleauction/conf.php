<?php

/* CP2013 - Software Engineering
 * SimpleAuction Project
 * Written PHP & MySQL
 */

/*
 * THIS FILE IS STRICTLY USED TO
 * CONFIGURE YOUR SPECIFIC SERVER & DATABASE CONNECT
 * 
 * $server is the name or IP Adress or your server
 * $dbuser is the name of your server database user
 * $pwd is the password of that user
 * $dbname is the database name that you are going to connect to
 */


$server = "localhost";
$dbuser = "root";
$pwd = "root";
$dbname = "simpleauction";

/*
 * Open connection to MySQL Server
 */
$connect = new mysqli($server, $dbuser, $pwd, $dbname);

/*
 * Check for connection error.
 */
if(mysqli_connect_error()) {
    die('Connect Error!!! Please re-check your configuration.');
}


?>
