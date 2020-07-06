<?php
    function is_key_valid($string) {
        $stored_hash = getenv('SEEDBOX_PASSWD');
        return password_verify($string, $stored_hash[0]);
        // check password against the stored hash
    }
?>