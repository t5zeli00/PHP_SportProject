<h1>Delete Championship</h1>
<TABLE border="1">
	<TR><TH>Championship name</TH><TH>Year</TH><TH>Sportsman #</TH><TH>Team #</TH><TH>Championship result</TH><TH>Delete selected</TH></TR>
	<?php
	foreach ($championships as $row) {
		echo '<tr><td>'.$row['namechamp'].'</td>';
		echo '<td>'.$row['year'].'</td>';
		echo '<td>'.$row['id_sportsman'].'</td>';
		echo '<td>'.$row['id_team'].'</td>';
		echo '<td>'.$row['resultchamp'].'</td>';
		echo '<td>';
		echo '<button><a href="'.site_url('championships/remove_championships').'/'.$row['id_champ'].'">Delete</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>