<?php 
if(isset($_SESSION['url']))
	$url = $_SESSION['url']; // holds url for last page visited.
else
	$url = "login_success.php"; // default page for
header("location:$url");
?>