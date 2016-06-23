<html>
<body>
<center><img src="slide2.jpg" height="250" width="900">
<?php
echo "<h1> IEEE Emea 2013 Sales Meeting </h1>";
error_reporting(E_ALL ^ E_DEPRECATED);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$con = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("ieee");

$result =mysql_query("SELECT * FROM `meeting` where Session = 149") or die(mysql_error());
$data = mysql_fetch_row($result);
echo "<h1>Year Of The Meeting</h1><br>";
echo  $data[0] ;
echo "<h1>Location</h1><br>";
echo  $data[1] ;
echo "<h1>Sessional</h1><br>";
echo  $data[2] ;
echo "<h1>Type</h1><br>";
echo  $data[3] ;

mysql_close($con);
?> 
</center>
</body>
</html> 
