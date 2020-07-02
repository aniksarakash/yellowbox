<?php
  $magnet = htmlspecialchars($_POST['magnet']);
  $add_key  = htmlspecialchars($_POST['add_key']);
  if (isset($_POST['add_clicked'])){

    $add_command = '/usr/bin/deluge-console add '.$_POST['magnet'];
    $escaped_add_command = escapeshellcmd($add_command);
    // make sure to sanitise/safely escape the command

    echo '<div class="torrents"><div class="torrent_info"><pre>';

    $out = array();
    exec($escaped_add_command, $out);
    foreach($out as $line) {
        echo "$line\n";
    }
    // output the addition response

    echo '</pre></div></div>';
  }
?>

<div class="op">

    <div class="op_title">
        add a <br/> magnet link
    </div>

    <form class="op_form" method="POST">
        <div>
            <label for="magnet">magnet link</label>
            <br/>
            <input name="magnet" id="magnet">
        </div>
        <div>
            <label for="add_key">private key</label>
            <br/>
            <input name="add_key" id="add_key">
        </div>
        <div>
            <button name="add_clicked">add</button>
        </div>
    </form>
</div>
