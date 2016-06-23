<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="s.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="tabContainer">
    <div id="tabs">
      <ul>
        <li id="tabHeader_1">MEETINGS</li>
        <li id="tabHeader_2">NEWS</li>
        <li id="tabHeader_3">EVENTS</li>
      </ul>
    </div>
    <div id="tabscontent">
    <div class="tabpage" id="tabpage_1">
        <h2>MEETINGS</h2>
       <img src="meeting1.jpg" width="100" height="100">
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
$result =mysql_query( "SELECT * FROM `meetingtab` where description = 'All interested parties are welcome to attend our open Public meetings of the IEEE 802.11 Working Group, you do not have to be an IEEE member to attend.'") or die(mysql_error());
while($data = mysql_fetch_row($result)){
 echo"<br>";
  echo "<td width='250px'>" . $data[0] . "</td>";
  echo "<br>";
  echo "<td width='250px'>" . $data[1] . "</td>";
  echo "&nbsp";
  echo "<td width='250px'>" . $data[2] . "</td>";
  
}
mysql_close($con);
?> 
       <img src="meeting2.jpg" width="100" height="100">
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
$result =mysql_query( "SELECT * FROM `meetingtab` where description = '2014 IEEE PES Asia-Pacific Power & Energy Engineering Conference (APPEEC)'") or die(mysql_error());
while($data = mysql_fetch_row($result)){
	echo"<br>";
  echo "<td width='250px'>" . $data[0] . "</td>";
  echo "<br>";
  echo "<td width='250px'>" . $data[1] . "</td>";
  echo "&nbsp";
  echo "<td width='250px'>" . $data[2] . "</td>";
  
}
mysql_close($con);
?> 
      </div>
      <div class="tabpage" id="tabpage_2">
        <h2>NEWS</h2>
        &nbsp;&nbsp;<img src = "img1.png"/>
        <p>IEEE Computer Society Looks to the Future with Report on Top Technologies for 2022 --- 2 September </p>
        &nbsp;&nbsp;<img src = "img2.jpg"/>
      <p>IEEE Journals Sustain High Rankings in Newest Citation Reports -- 2 August</p><br>
      <center><a href="news.php">view more news</a> </center> 
      </div>
      <div class="tabpage" id="tabpage_3">
        <h2>EVENTS</h2>
        &nbsp;&nbsp;<img src= "paris.jpg"/>
        <p><?php
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
$result =mysql_query( "SELECT * FROM `eventtab` LIMIT 1") or die(mysql_error());
while($data = mysql_fetch_row($result)){
	echo"<br>";
  echo "<td width='250px'>" . $data[0] . "</td>";
  echo "<br>";
  echo "<td width='250px'>" . $data[1] . "</td>";
  echo "&nbsp";
  echo "<td width='250px'>" . $data[2] . "</td>";
  
}
mysql_close($con);
?>  
  </p>
 <br>&nbsp;&nbsp;<img src= "img.png"/>
        <p>
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
$result =mysql_query( "SELECT * FROM `eventtab` where place = 'Bangalore, India'") or die(mysql_error());
while($data = mysql_fetch_row($result)){
	echo"<br>";
  echo "<td width='250px'>" . $data[0] . "</td>";
  echo "<br>";
  echo "<td width='250px'>" . $data[1] . "</td>";
  echo "&nbsp";
  echo "<td width='250px'>" . $data[2] . "</td>";
  
}
mysql_close($con);
?>  
         </p><br>
      </div>
      
      
    </div>
  </div>
  <script src="tabs_old.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1332079-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>