<?php
    function is_key_valid($string) {
        $stored_hash = getenv('SEEDBOX_PASSWD');
        return password_verify($string, $stored_hash);
        // check password against the stored hash
    }
?>