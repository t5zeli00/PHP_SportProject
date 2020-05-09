<h1>Update Championsips</h1>
<FORM method="POST" action="<?php echo site_url('championships/update_championships'); ?>">
<TABLE>
	<TR><TH>Championship name</TH><TH>Year</TH><TH>Sportsman #</TH><TH>Team #</TH><TH>Championship result</TH></TR>
	<?php
	foreach ($championships as $row) {
		echo '<input type="hidden" name="idcm[]" value="'.$row['id_champ'].'"/>';
		echo '<tr><td><input type="text" name="cmp[]" value="';
			echo $row['namechamp'];
			echo '"/></td>';
		echo '<td><input type="text" name="yr[]" value="';
			echo $row['year'];
			echo '"/></td>';
		echo '<td><input type="text" name="idsp[]" value="';
			echo $row['id_sportsman'];
			echo '"/></td>';
		echo '<td><input type="text" name="idtm[]" value="';
			echo $row['id_team'];
			echo '"/></td>';
		echo '<td><input type="text" name="resl[]" value="';
			echo $row['resultchamp'];
			echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td></td><td><input type="submit" name="btnSave" value="Save"/></td>
</TABLE>