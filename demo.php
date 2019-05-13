<?php
$bodyId = 'DemoPage';
include 'header.php';
?>
<div id="Content">
	<p>A cron job resets the demo database to the initial state, hence do not be afraid to break anything there. On the other hand, do not input any data that you are not ready to lose and/or to share with the world. Log in with full privileges using <strong>username: <em>admin</em></strong> and <strong>password: <em>admin</em></strong>. Have fun!</p>
	<p><a href="http://demo.racktables.org/">Release <?php echo $demorelease;?> demo<img width=16 height=16 src='/img/ext-link.png'></a></p>
</div>
<?php include 'footer.php';?>
