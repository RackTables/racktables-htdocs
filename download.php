<?php
$bodyId = 'DownloadPage';
require 'header.php';
?>
<div id="Content">
<p>The latest stable version is <strong><?php echo $lastrelease;?></strong>. You can <a href="/files/RackTables-<?php echo $lastrelease;?>.tar.gz">download it here</a>. Or check out older releases <a href="/files/">here</a></p>
</div>
<?php
require 'footer.php';
