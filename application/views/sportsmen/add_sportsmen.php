<h1>Add new Sportsman</h1>
<FORM action="<?php echo site_url('sportsmen/add_sportsmen'); ?>" method="POST">
<TABLE>
	<TR><TD>Name</TD><TD><input type="text" name="sn" placeholder="Write a name" required="" /></TD></TR>
	<TR><TD>Date of birth</TD><TD><input type="text" placeholder="YYYY-MM-DD" name="bd"/></TD></TR>
	<TR><TD>Team #</TD><TD><input type="text" name="tm" placeholder="Write a team" required="" /></TD></TR>
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