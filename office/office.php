<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

</style>

</head>

<body  bgcolor ="#AFEEEE">
<font style="font-family:Verdana, Geneva, sans-serif" size = 2>
<p><img src="bnr_OfficeBearers.jpg" width="1294" height="151" /></p>
<p>&nbsp;</p>
<table width="1200" height="342" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <th width="198" height="208" scope="row"><img src="pic.jpg" width="198" height="202" /></th>
    <th width="198" scope="row"><img src="abiswas_new.jpg" width="198" height="202" /></th>
    <th width="198" scope="row"><img src="rajesh kumar.jpg" width="198" height="202" /></th>
    <th width="198" scope="row"><img src="nishchal.jpg" width="198" height="202" /></th>
    <th width="198" scope="row"><img src="dilip kumar.jpg" width="198" height="202" /></th>
    <th width="199" scope="row"><img src="saiket.jpg" width="198" height="202" /></th>
  </tr>
  <tr>
    <th height="38" scope="row"><p><strong>Chairperson</strong></p>
    <p>&nbsp;</p></th>
    <th scope="row"><p>Vice Chairperson</p>
    <p>&nbsp;</p></th>
    <th scope="row"><p><strong>Vice-chairperson</strong>:</p>
    <p>&nbsp;</p></th>
    <th scope="row"><p><strong>Secretary</strong></p>
    <p>&nbsp;</p></th>
    <th scope="row"><p><strong>Joint Secretary</strong></p>
    <p>&nbsp;</p></th>
    <th scope="row"><p><strong>Treasurer</strong></p>
    <p>&nbsp;</p></th>
  </tr>
  <tr>
    <th height="38" scope="row">Dr. S.N.Singh,EE Department,IIT Kanpur    </th>
    <th scope="row">Dr. Animesh Biswas,EE Department,IIT Kanpur,</th>
    <th scope="row">Dr. R.K. Singh, Dept. of Electrical Engg, MNNIT, Allahabad</th>
    <th scope="row">Dr. Nischal K Verma, EE Department, IIT Kanpur,</th>
    <th scope="row"><p>:Dr Dilip Kumar Sharma, Dept. of Computer Engineering &amp; Applications GLA University, Mathura</p>
    <p>&nbsp;</p></th>
    <th scope="row">Dr. Saikat Chakrabarti, EE Department, IIT Kanpur </th>
  </tr>
  <tr>
    <th height="38" scope="row"><p>snsingh@iitk.ac.in </p>
    <p>&nbsp;</p></th>
    <th scope="row"><p>abiswas@iitk.ac.in</p>
    <p>&nbsp;</p></th>
    <th scope="row"><p>rksingh@mnnit.ac.in</p>
    <p>&nbsp;</p></th>
    <th scope="row"><p>nishchal@iitk.ac.in</p>
    <p>&nbsp;</p></th>
    <th scope="row"><p>dilip.sharma@gla.ac.in</p>
    <p>&nbsp;</p></th>
    <th scope="row"><p>saikatc@iitk.ac.in</p>
    <p>&nbsp;</p></th>
  </tr>
</table>
</font>
<p>&nbsp;</p>
<p><font style="font-family:Verdana, Geneva, sans-serif" size = 2>  </font>
</p>
<p><font style="font-family:Verdana, Geneva, sans-serif" size = 2>  <br />
</font><strong><em> OTHER OFFICE BEARERS</em></strong></p>
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

$result =mysql_query("SELECT * FROM `office`") or die(mysql_error());

echo "<table border = '1' cellpadding='0' cellspacing='0' height='400'>
<tr>
<th><h3><b>Name</th>
<th><h3><b>Committee</th>
<th><h3><b>Current Status</th>
<th><h3><b>E-mail</th>
</tr>";
while($data = mysql_fetch_row($result)) {
 echo "<tr>";
  echo "<td bgcolor='#9933FF' height='50'>" . $data[1] . "</td>";
  echo "<td bgcolor='#999933'>" . $data[0] . "</td>";
   echo "<td bgcolor='#CCCCFF'>" . $data[2] . "</td>";
    echo "<td bgcolor='#996699'>" . $data[3] . "</td>";
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
