<h1>Update Sportsmen</h1>
<FORM method="POST" action="<?php echo site_url('sportsmen/update_sportsmen'); ?>">
<TABLE>
	<TR><TH>Name</TH><TH>Date of birth</TH><TH>Team #</TH></TR>
	<?php
	foreach ($sportsmen as $row) {
		echo '<input type="hidden" name="id[]" value="'.$row['id_sportsman'].'"/>';
		echo '<tr><td><input type="text" name="sn[]" value="';
			echo $row['sname'];
			echo '"/></td>';
		echo '<td><input type="text" name="bd[]" value="';
			echo $row['dateofbirth'];
			echo '"/></td>';
		echo '<td><input type="text" name="tm[]" value="';
			echo $row['id_team'];
			echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td></td><td><input type="submit" name="btnSave" value="Save"/></td>
</TABLE>