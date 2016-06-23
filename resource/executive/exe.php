<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
	font-size:15px;
}
</style>
</head>
<body  bgcolor ="#AFEEEE">
<font style="font-family:Verdana, Geneva, sans-serif"
<p>All office bearers, conveners of different committees, chairman of subsections, chairpersons of society chapters, and immediate past chairperson of the section are ex-officio members of the executive committee.</p>
<p class="lin1"><strong>LIST OF COMMITTEE MEMBERS FOR THE YEAR 2014</strong></p>
<table height="300" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="152" height="150"><img src="prof/download.jpg" width="150" height="170" /></td>
    <td width="152" height="150"><img src="prof/Raj Kamal Tripathi.jpg" width="167" height="170" /></td>
    <td width="152" height="150"><img src="prof/saikat chakarborti.jpg" width="150" height="170" /></td>
    <td width="162" height="150"><img src="prof/AK Mishra.jpg" width="162" height="170" /></td>
    <td width="153"><img src="prof/M Jaleel akhtar.jpg" width="152" height="170" /></td>
    <td width="151"><img src="prof/Nishchal k verma.png" width="150" height="170" /></td>
    <td width="156"><img src="prof/sks.JPG" width="158" height="170" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><p>Chairperson, Roorkee subsection </p></td>
    <td bgcolor="#FFFFFF"><p>Chairperson, IEEE IE/PE/CS (industrial electronics/ power electronics/ controlsystems) </p></td>
    <td bgcolor="#FFFFFF"> 
    <p>Chairperson, IEEE PE/IA (Power engineering/ industry application) chapter</p>
    <p>&nbsp;</p></td>
    <td bgcolor="#FFFFFF"><p>Chairperson,IEEE SP/C (signal processing/ computer)</p></td>
    <td bgcolor="#FFFFFF"><p>Chairperson, IEEE MTT (Microwave Theory and Techniques)</p></td>
    <td bgcolor="#FFFFFF"><p>Chairman, IEEE CIS Chapter</p></td>
    <td bgcolor="#FFFFFF"><p>Assistant professor</p>
    <p>IIIT ALLAHABAD,UP</p></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><p>Dr. Vinod Kumar, Dept. of Electrical Engg., IIT Roorkee,</p></td>
    <td bgcolor="#FFFFFF"> 
    <p>Prof. R. K. Tripathi, Department of Electrical Engineering, MNNIT, Allahabad,</p>
    <p>&nbsp;</p></td>
    <td bgcolor="#FFFFFF"><p>Dr. Saikat Chakraborti, EE Department, IIT Kanpur</p></td>
    <td bgcolor="#FFFFFF"><p>Dr. A. K. Mishra,Department of Computer Science, MNNIT,</p></td>
    <td bgcolor="#FFFFFF"><p>Dr. M Jaleel Akhtar,EE Department, IIT Kanpur</p></td>
    <td bgcolor="#FFFFFF"><p>Dr Nischal K Verma, EE Department, IIT Kanpur</p></td>
    <td bgcolor="#FFFFFF"><p>Dr. Satish Kumar Singh</p></td>
  </tr>
  <tr>
    <td height="16" bgcolor="#FFFFFF"><p>vinodfee@iitr.ernet.in</p></td>
    <td bgcolor="#FFFFFF"><p>rktripathi@mnnit.ac.in</p></td>
    <td bgcolor="#FFFFFF"><p>saikatc@iitk.ac.in</p></td>
    <td bgcolor="#FFFFFF"><p>arun_kmisra@hotmail.com</p></td>
    <td bgcolor="#FFFFFF"><p>mjakhtar@iitk.ac.in</p></td>
    <td bgcolor="#FFFFFF"><p>nishchal@iitk.ac.in</p></td>
    <td bgcolor="#FFFFFF"> sk.singh@iiita.ac.in</td>
  </tr>
</table>
<p class="line"><strong>Other members of the Executive Committee </strong></p>
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

$result =mysql_query("SELECT * FROM `executive`") or die(mysql_error());

echo "<table border = '1' cellpadding='0' cellspacing='0' bordercolor='#0066CC'>
<tr>
<th><h3><b>Name</th>
<th><h3><b>Current Status</th>
<th><h3><b>E-mail</th>
</tr>";
while($data = mysql_fetch_row($result)) {
 echo "<tr>";
  echo "<td bgcolor='#9933FF' height='20'>" . $data[0] . "</td>";
  echo "<td bgcolor='#999933'>" . $data[1] . "</td>";
   echo "<td bgcolor='#CCCCFF'>" . $data[2] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysql_close($con);
?> 
<br />
<br />
<hr color="#00000"/>
</font>
</body>
</html>
