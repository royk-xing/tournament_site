<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
require_once '../Logic/_login_header.php';
?>

<div class="myAccountMenu">
	<ul class="accountmenu">  
        <li><a href = "#" ><h2><span> Edit tournament </span></h2></a></li>  
        <li><a href = "#" ><h2><span> Create tournament </span></h2></a></li>  
        <li><a href = "#" ><h2><span> Settings</span></h2></a></li>  
        <li><a href = "#" ><h2><span> TBA </span></h2></a></li>  
    </ul> 

</div>

</body>
</html>
