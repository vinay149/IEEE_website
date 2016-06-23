<html>
<body>
<?php
session_start();
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

$result =mysql_query("SELECT * FROM `executive`") or die(mysql_error());

echo "<table border='1'>
<tr>
<th>name</th>
<th>current status</th>
<th>email</th>
</tr>";
while($data = mysql_fetch_row($result)) {
  echo "<tr>";
  echo "<td>" . $data[0] . "</td>";
  echo "<td>" . $data[1] . "</td>";
   echo "<td>" . $data[2] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysql_close($con);
?> 
<a href="executive_add.php">ADD</a><BR>
<a href="executive_delete.php">DELETE</a><BR>
<a href="logout.php">LOGOUT</a><BR>

</body>
</html> 