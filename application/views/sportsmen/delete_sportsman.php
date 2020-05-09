<h1>Delete Sportsmen</h1>
<TABLE BORDER="1">
	<TR><TH>Name</TH><TH>Date of Birth</TH><TH>Team</TH><TH>Delete selected</TH></TR>
	<?php
	foreach ($sportsmen as $row) {
		echo '<tr><td>'.$row['sname'].'</td>';
		echo '<td>'.$row['dateofbirth'].'</td>';
		echo '<td>'.$row['id_team'].'</td>';
		echo '<td>';
		echo '<button><a href="'.site_url('sportsmen/remove_sportsmen').'/'.
		$row['id_sportsman'].'">Delete</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>