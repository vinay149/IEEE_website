<html>
<body>
<?php
echo" <h1>Future Plan Of Ieee Meeting <h1>";
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

$result =mysql_query( "SELECT * FROM `future`") or die(mysql_error());

echo "<table border='1' cellpadding='0' cellspacing='0' bordercolor='#0000CC' width='800'>
<tr>
<th><h2><b>For Year 2015</th>
<th><h2><b>Location of theMeeting</th>
<th><h2><b>Session</th>
<th><h2><b>Type</th>
</tr>";
while($data = mysql_fetch_row($result)) {
  echo "<tr>";
  echo "<td bgcolor='#9933FF' height='80'>" . $data[0] . "</td>";
  echo "<td bgcolor='#999933'>" . $data[1] . "</td>";
   echo "<td bgcolor='#CCCCFF'>" . $data[2] . "</td>";
    echo "<td bgcolor='#996699'>" . $data[3] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysql_close($con);
?> 

</body>
</html> 
