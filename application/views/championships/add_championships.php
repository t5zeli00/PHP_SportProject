<h1>Add new Championship Result</h1>
<FORM action="<?php echo site_url('championships/add_championships'); ?>" method="POST">
<TABLE>
	<TR><TD>Championship name</TD><TD><input type="text" name="cmp" placeholder="Write a championship name" required="" /></TD></TR>
	<TR><TD>Year</TD><TD><input type="text" name="yr" placeholder="Write a year"/></TD></TR>
	<TR><TD>Sposrtsman #</TD><TD><input type="text" name="idsp" placeholder="Write a id of sportsmen" required="" /></TD></TR>
	<TR><TD>Team #</TD><TD><input type="text" name="idtm" placeholder="Write a id of team"/></TD></TR>
	<TR><TD>Result</TD><TD><input type="text" name="resl" placeholder="Write a championship result"/></TD></TR>
	<TR><TD></TD><TD><input type="submit" name="btnSave" value="Save"/></TD></TR>
</TABLE>
</FORM>
<!-- feedback to a user -->
<?php
if (isset($test)) {
	if ($test)
		echo 'Data Inserted';
	else 
		echo 'Something went wrong';
}
?>