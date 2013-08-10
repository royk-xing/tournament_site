<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
require_once 'Logic/_login_header.php';
?>
<?php ?>
	<div id="body">
		<?php require_once 'Logic/_tournament_connect.php'; ?>
	</div>
</body>
</html>




































