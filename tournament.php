<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
require_once 'Logic/_login_header.php';
?>
<?php 
	require_once 'Logic/db_connect.php';
	$tbl_name="Tournaments";
	$id = $_GET['id'];
	mysql_select_db("$db_name")or die(mysql_error());
	$tresult = mysql_query("SELECT * FROM $tbl_name WHERE tid = $id ") or die(mysql_error());
	$row = mysql_fetch_assoc($tresult);
		//echo $row['tname'];

?>
<div class="theader">
<img src="images/umbc_club_logo.gif" alt="UMBC Club Logo" class="tlogo">
<h4> <?php echo $row['tname']; ?></h4>
<br/>
<img src="images/CAN.png" class="flag" width="16" height="14" alt="Canada" title="Canada">
Badminton Manitoba, Winnipeg, Canada
</div>



<div id="tab-container">  
    <ul class="tab-menu">  
        <li title="Organization">Organization</li>  
        <li title="Seeded">Seeded entries</li>  
        <li title="Events">Events</li>  
        <li title="Draws">Draws</li>  
        <li title="Matches">Matches</li>  
        <li title="Players">Players</li>  
        <li title="Winners">Winners</li>  
    </ul>  
	    <div class="clear"></div>  
	    <div class="tab-top-border"></div>
	<div id="content">
	    <div id="Organization">
	        <h1><?php echo $row['thostname']; ?></h1>
	    	<table>
	    		<tbody>
			        <tr>
			        	<th>Venue:</th>
			        	<td><?php echo $row['thostname']; ?></td>
			        </tr>
			        <tr>
			        	<th>Adress:</th>
			        	<td><?php echo $row['taddress']; ?></td>
			        </tr>
		        </tbody>
	        </table>
	    </div>
	    <div id="Seeded">
	        <h1>Seeded entries</h1>
	        coming soon!
	    </div>
	    <div id="Events">  
	        <h1>Events</h1>
	        <?php echo $row['tevents']; ?>
	    </div>
	    <div id="Draws">  
	        <h1>Draws</h1>
	        coming soon!
	    </div>
	    <div id="Matches">  
	        <h1>Matches</h1>
	        coming soon!
	    </div>
	    <div id="Players">  
	        <h1>Players</h1>
	        coming soon!
	    </div>
	    <div id="Winners">  
	        <h1>Winners</h1>
	        <?php echo $row['twinner']; ?>
	    </div>
	    
    </div>
</div>

<script type="text/javascript">

$(document).ready(function() {
    $("#content div").hide(); // Initially hide all content
    $(".tab-menu > li:first").attr("class","active"); // Activate first tab
    $("#content div:first").show(); // Show first tab content

$('.tab-menu > li').click(function(e) {
    e.preventDefault();
    $("#content div").hide(); //Hide all content
    $(".tab-menu > li").removeClass("active"); //Reset id's
    $(this).attr("class","active"); // Activate this
    $('#' + $(this).attr('title')).show(); // Show content for current tab
   
});
})();

</script>
	
</body>
</html>