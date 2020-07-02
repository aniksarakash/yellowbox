<div class="torrents">
    <?php
        $out = array();
        $line_count = 0;

        exec("/usr/bin/deluge-console info", $out);
        foreach($out as $line) {
            ++$line_count;
            if ($line_count % 9 == 1) {
                echo '<div class="torrent_info"><pre>';
            }
            if ($line_count % 9 == 0) {
                echo "$line</pre></div>";
            }
            else {
                echo "$line\n\n";
            }
        }
    ?>
</div>
