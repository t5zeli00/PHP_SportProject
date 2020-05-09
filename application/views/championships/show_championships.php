<h1>Championships</h1>
<TABLE border="1">
	<TR><TH>Championship name</TH><TH>Year</TH><TH>Sportsman #</TH><TH>Team #</TH><TH>Championship result</TH></TR>
	<?php
	foreach ($championships as $row) {
		echo '<tr><td>'.$row['namechamp'].'</td>';
		echo '<td>'.$row['year'].'</td>';
		echo '<td>'.$row['id_sportsman'].'</td>';
		echo '<td>'.$row['id_team'].'</td>';
		echo '<td>'.$row['resultchamp'].'</td></tr>';
	}
	?>
</TABLE>
