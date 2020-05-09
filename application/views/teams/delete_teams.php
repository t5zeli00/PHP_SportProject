<h1>Delete Sportsmen</h1>
<TABLE border="1">
	<TR><TH>Team name</TH><TH>Country</TH><TH>Sport</TH><TH>Coachname</TH><TH>Delete selected</TH></TR>
	<?php
	foreach ($teams as $row) {
		echo '<tr><td>'.$row['nameteams'].'</td>';
		echo '<td>'.$row['country'].'</td>';
		echo '<td>'.$row['sport'].'</td>';
		echo '<td>'.$row['coachname'].'</td>';
		echo '<td>';
		echo '<button><a href="'.site_url('teams/remove_teams').'/'.$row['id_team'].'">Delete</a></button>';
		echo '</td></tr>';
	}
	?>
</TABLE>