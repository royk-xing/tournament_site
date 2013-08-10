<h3>Tournaments</h3>
<table class="tournament_tabel">
	<?php 
	require_once 'db_connect.php';
	$tbl_name="Tournaments";
	mysql_select_db("$db_name")or die(mysql_error());
	$result = mysql_query("SELECT * FROM $tbl_name");
	while($row = mysql_fetch_array($result)){ ?>
	<tr>
		<td class="badminton_icon"> <!-- <a href = "tournament.php" ><?php //echo $row['tname'] . " " . $row['tdate']; ?> </a></td> -->
									<?php echo "<a href=tournament.php?id=". $row['tid']. ">". $row['tname'] . " " . $row['tdate']. "</a>"; ?> </td>
		
		<?php 
		/*
		$_SESSION['tournament_name'] = $row['tname'];
		$_SESSION['tournament_date'] = $row['tdate'];
		$_SESSION['tournament_hostname'] = $row['thostname'];
		$_SESSION['tournament_address'] = $row['taddress'];
		$_SESSION['tournament_contactname'] = $row['tcontact_name'];
		$_SESSION['tournament_contactphone'] = $row['tcontact_phone'];
		$_SESSION['tournament_contactemail'] = $row['tcontact_email'];
		$_SESSION['tournament_contactwinner'] = $row['twinner'];
		$_SESSION['tournament_contactevents'] = $row['tevents'];
		*/
		?>
	</tr>
	<?php } mysql_close();?>
</table>