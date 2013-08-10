<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
require_once 'Logic/_login_header.php';
?>

<div class="myAccountMenu">
	<ul class="accountmenu">  
        <li><a href = "myAccount/manage_tournament.php" ><h2><span> Manage tournaments </span></h2></a></li>  
        <li><a href = "#" ><h2><span> Personal Profile </span></h2></a></li>  
        <li><a href = "#" ><h2><span> Settings</span></h2></a></li>  
        <li><a href = "#" ><h2><span> TBA </span></h2></a></li>  
    </ul> 

</div>

</body>
</html>
