<?php
require 'header.php';
?>
<div id="Content">
	<div id="MainMotto">
		<h1>RackTables is a datacenter asset management system</h1>
	</div>
	<div id="MainScreenshot"><img src="img/screenshots/shot-indexpage.png" width="471" height="313" alt="index page screenshot" /></div>
	<div id="MainText">
		<p>RackTables is a nifty and robust solution for datacenter and server room asset management. It helps document hardware assets, network addresses, space in racks, networks configuration and much much more!</p>
		<div id="Download"><h3>Check the</h3><div id="DownloadButton"><a href="demo.php">Live demo (<?php echo $demorelease; ?>)</a></div></div>
<div id="Download">
<?php if ( isset ($currentrelease) && $currentrelease !== $lastrelease) { ?>
		<h3>The current release<?php echo EXTLINKIMG; ?></h3><div id="DownloadButton">
		<a href="https://sourceforge.net/projects/racktables/files/RackTables-<?php echo $currentrelease;?>.tar.gz/download">RackTables <?php echo $currentrelease;?>
		</a></div><br/>
<?php  } ?>
		<h3>The latest stable release<?php echo EXTLINKIMG; ?></h3><div id="DownloadButton">
		<a href="https://sourceforge.net/projects/racktables/files/RackTables-<?php echo $lastrelease;?>.tar.gz/download">RackTables <?php echo $lastrelease;?>
		</a></div></div>
	</div>
</div>
<?php
require 'footer.php';
