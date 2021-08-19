<?php
$lastrelease = '0.21.5';
$demorelease = '0.21.5';
if (! isset ($bodyId))
	$bodyId = 'IndexPage';

define ('EXTLINKIMG', '<img width="16" height="16" src="/img/ext-link.png" alt="external link" />');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>RackTables</title>
	<link rel="stylesheet" href="racktables.org.css" />
</head>

<body id="<?php echo $bodyId; ?>">

<div id="Head">
	<span id="Logo"><a href="/"><img width="210" height="40" src="/img/logo.png" alt="RackTables" /></a></span>
	<div id="TopMenu">
		<ul>
			<li><a href="about.php">About</a></li>
			<li><a href="https://sourceforge.net/projects/racktables/files/">Download</a>
			<?php echo EXTLINKIMG; ?></li>
			<li><a href="screenshots.php">Screenshots</a></li>
			<li><a href="team.php">Team</a></li>
			<li><a href="contacts.php">Feedback and community</a></li>
		</ul>
	</div>
</div>
