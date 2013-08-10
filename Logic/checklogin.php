<?php
require_once 'db_connect.php';

$tbl_name="Users";
mysql_select_db("$db_name")or die(mysql_error());

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
	session_start();
	$_SESSION['myusername'] = $myusername;
	require_once '_login_redirect.php';
}else {
	echo "Wrong Username or Password";
}
?>