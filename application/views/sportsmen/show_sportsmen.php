<h1>Sportsmen</h1>
<TABLE border="1">
	<TR><TH>Name</TH><TH>Date of birth</TH><TH>Team #</TH></TR>
	<?php
	foreach ($sportsmen as $row) {
		echo '<tr><td>'.$row['sname'].'</td>';
		echo '<td>'.$row['dateofbirth'].'</td>';
		echo '<td>'.$row['id_team'].'</td></tr>';
	}
	?>
</TABLE>
