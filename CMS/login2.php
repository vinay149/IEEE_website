<?php
session_start();
if(!isset($_SESSION['myusername'])){
//header("location:login1.html");
}
error_reporting(E_ALL ^ E_DEPRECATED);
include 'connection.php';
echo"<center>";
echo "<H2>IEEE UP SECTION DATABASE</H2>";
?>
<h4>Welcome:</h4>
<li>
				<a href="executive.php">EXECUTIVE MEMBERS</a>
			</li><br />
			<li>
				<a href="office_bearer.php">OFFICE BEARERS</a>
			</li><br />
			<li>
			<a href="conference.php">CONFERENCE</a>
			</li><br />
			<li>
				<a href="meetings.php">MEETINGS</a>
			</li><br />
            <li>
				<a href="news.php">NEWS</a>
			</li><br />
            <li>
				<a href="events.php">EVENTS</a>
			</li><br />
			<h3><a href="logout.php">LOGOUT</a></h3>
   </body>
   </html>