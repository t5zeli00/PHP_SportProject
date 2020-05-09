<h1>Add new Team</h1>
<FORM action="<?php echo site_url('teams/add_teams'); ?>" method="POST">
<TABLE>
	<TR><TD>Team name</TD><TD><input type="text" name="tn" placeholder="Write a team name" required="" /></TD></TR>
	<TR><TD>Country</TD><TD><input type="text" name="cn" placeholder="Write a country"/></TD></TR>
	<TR><TD>Sport</TD><TD><input type="text" name="spt" placeholder="Write a kind of sport" required="" /></TD></TR>
	<TR><TD>Coach name</TD><TD><input type="text" name="chn" placeholder="Write a coach name"/></TD></TR>
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