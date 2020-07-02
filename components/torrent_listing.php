<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="torrents">
	<?php
		$out = array();
        $line_count = 0;

        exec("deluge-console info", $out);
		foreach($out as $line) {
            echo "$line\n\n";
            ++$line_count;
            if ($line_count % 9 == 1) {
                echo '<div class="torrent_info"><pre>';
            }
            if ($line_count % 9 == 0) {
                echo '</pre></div>';
            }
		}
	?>
    </div>
</body>
