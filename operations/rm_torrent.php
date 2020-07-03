<?php
    
    if (isset($_POST['rm_clicked'])) {
        // the button was clicked
        include 'verify_key.php';
        
        if (!is_key_valid($_POST['rm_key'])) {
            // check if pass is not a ok
            echo '<div class="torrents"><div class="torrent_info"><pre>';
            echo 'Wrong password!';
            // output the removal response
            echo '</pre></div></div>';
        }
        else {
            $rm_command = '/usr/bin/deluge-console rm '.$_POST['torrent_id'];
            $escaped_rm_command = escapeshellcmd($rm_command);
            // make sure to sanitise/safely escape the command

            exec($escaped_rm_command);
            // remove!

            echo '<div class="torrents"><div class="torrent_info"><pre>';
            echo 'The torrent with the specified id has been deleted (if it ever existed).';
            // output the removal response
            echo '</pre></div></div>';
    
        }
    }
?>

<div class="op">
	
    <div class="op_title">
        remove a <br/> torrent
    </div>

    <form class="op_form" action="#" method="POST">
        <div>
            <label for="torrent_id">torrent id</label>
            <br/>
            <input name="torrent_id" id="torrent_id">
        </div>
        <div>
            <label for="rm_key">private key</label>
            <br/>
            <input name="rm_key" id="rm_key">
        </div>
        <div>
            <button name="rm_clicked">remove</button>
        </div>
    </form>
</div>
