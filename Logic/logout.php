<?php 
session_start();
if(strpos($_SESSION['url'], 'myAccount') !== false)
	$homepage = 1;
session_destroy();
if($homepage == 1){

	header('Location: ../index.php');
}
else {

	require_once '_login_redirect.php';
}
?>
