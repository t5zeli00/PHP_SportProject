<!DOCTYPE html>
<html>
<head>
<title>Sport Project</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/mystyle.css');?>">
</head>
<body>

<h1>This is the CodeIgniter Project</h1>
<!-- a menu -->
<ul>
	<li><a href="<?php echo site_url('main') ?>">Main Page</a></li>
	<li><a href="ProjectDocument.doc" target='_blank' title="Click here to open Word Document">Project Document</a></li>
</ul>
<ul>
	<li><a href="<?php echo site_url('championships/show_championships');?>">Show Championships</a></li>	
	<li><a href="<?php echo site_url('championships/add_championships');?>">Add a Championship</a></li>
	<li><a href="<?php echo site_url('championships/delete_championships');?>">Delete a Championship</a></li>
	<li><a href="<?php echo site_url('championships/update_championships');?>">Update Championships</a></li>
</ul>
<ul>
	<li><a href="<?php echo site_url('sportsmen/show_sportsmen');?>">Show Sportsmen</a></li>
	<li><a href="<?php echo site_url('sportsmen/add_sportsmen');?>">Add a Sportsman</a></li>
	<li><a href="<?php echo site_url('sportsmen/delete_sportsmen');?>">Delete a Sportsman</a></li>
	<li><a href="<?php echo site_url('sportsmen/update_sportsmen');?>">Update Sportsmen</a></li>
</ul>
<ul>
	<li><a href="<?php echo site_url('teams/show_teams');?>">Show Teams</a></li>
	<li><a href="<?php echo site_url('teams/add_teams');?>">Add a Team</a></li>	
	<li><a href="<?php echo site_url('teams/delete_teams');?>">Delete a Teams</a></li>	
	<li><a href="<?php echo site_url('teams/update_teams');?>">Update Teams</a></li>
</ul>

