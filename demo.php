<?php
$bodyId = 'DemoPage';
include 'header.php';
?>
<div id="Content">
	<p>The demo database is reset to the initial state by a cron script, don't be afraid to break anything there and don't input any valuable data, it will be lost. Log in with full privileges using <strong>username: <em>admin</em></strong> and <strong>password: <em>admin</em></strong>. Have fun!</p>
	<p><a href="http://demo.racktables.org/">Release <?php echo $demorelease;?> demo<img width=16 height=16 src='/img/ext-link.png'></a></p>
</div>
<?php include 'footer.php';?>
