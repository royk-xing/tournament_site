<?php
require_once "db_connect.php";
$tbl_name="Users";
mysql_select_db("$db_name")or die(mysql_error());
$username = $_POST['username'];
$useremail= $_POST['email'];
$password = $_POST['password'];
mysql_query("INSERT INTO Users(username,email,password,salt) VALUES ('$username','$useremail' ,'$password','$password')")
    or  die("".mysql_error());
    session_start();
    $_SESSION['myusername'] = $username;
require_once '_login_redirect.php';

?>