<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="ieee"; // Database name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
?>