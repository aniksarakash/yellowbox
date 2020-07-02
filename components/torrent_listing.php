<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="torrents">
	<?php
		$out = array();
        exec("deluge-console info", $out);
        echo '<div class="torrent_info"><pre>';
		foreach($out as $line) {
			echo "$line\n\n";
		}
        echo '</pre></div>';
	?>
    </div>
</body>
