<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="ieee"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$result=mysql_query("SELECT * FROM `members`  WHERE username='$myusername' and password='$mypassword'")or die(mysql_error());

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
echo"success";
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername']= "$username";
$_SESSION['mypassword']= "$password";
header("location:login2.php");
}
else {
echo "Wrong Username or Password";
}
?>