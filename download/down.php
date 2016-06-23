<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost","root","");
 mysql_select_db("database_name");
  $result =mysql_query("SELECT * FROM `download`") or die(mysql_error());
	 $type = mysql_fetch_row($result);
	  Header( "Content-type: $type");
	   ?> 