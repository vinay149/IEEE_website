</html><head>
</title>
</title>
</head>
<body bgcolor bgcolor="#CCCCCC">

<font style="font-family:Verdana, Geneva, sans-serif">
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$con = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $con )
{
  die('Could not connect: ' . mysql_error());
} 
else 
{
}

mysql_select_db("ieee");
echo "<marquee direction='up' height='500px' scrollamount='3'>";
$result =mysql_query( "SELECT * FROM `news`") or die(mysql_error());
while($data = mysql_fetch_row($result)) {
 echo"<li>";
  echo "<td width='250px'>" . $data[0] . "</td>";
  echo "<br><br>";
}

echo "</table>";
echo "</marquee>";
mysql_close($con);
?> 
</font>
</body>
</html>