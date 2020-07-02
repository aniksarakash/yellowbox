<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="torrents">
	<?php
		$out = array();
		exec("deluge-console info", $out);
        echo '<pre class="torrent_info">';
		foreach($out as $line) {
			echo "$line\n\n";
		}
        echo '</pre>';
	?>
    </div>
</body>
