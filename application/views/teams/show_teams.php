<h1>Teams</h1>
<TABLE border="1">
	<TR><TH>Team name</TH><TH>Country</TH><TH>Sport</TH><TH>Coachname</TH></TR>
	<?php
	foreach ($teams as $row) {
		echo '<tr><td>'.$row['nameteams'].'</td>';
		echo '<td>'.$row['country'].'</td>';
		echo '<td>'.$row['sport'].'</td>';
		echo '<td>'.$row['coachname'].'</td></tr>';
	}
	?>
</TABLE>
