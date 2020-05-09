<h1>Update Teams</h1>
<FORM method="POST" action="<?php echo site_url('teams/update_teams'); ?>">
<TABLE>
	<TR><TH>Team name</TH><TH>Country</TH><TH>Sport</TH><TH>Coachname</TH></TR>
	<?php
	foreach ($teams as $row) {
		echo '<input type="hidden" name="idtm[]" value="'.$row['id_team'].'"/>';
		echo '<tr><td><input type="text" name="tn[]" value="';
			echo $row['nameteams'];
			echo '"/></td>';
		echo '<td><input type="text" name="cn[]" value="';
			echo $row['country'];
			echo '"/></td>';
		echo '<td><input type="text" name="spt[]" value="';
			echo $row['sport'];
			echo '"/></td>';
		echo '<td><input type="text" name="chn[]" value="';
			echo $row['coachname'];
			echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td></td><td><input type="submit" name="btnSave" value="Save"/></td>
</TABLE>