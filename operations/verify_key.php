<?php
    function is_key_valid($string) {
        $stored_hash = file('key.txt', FILE_IGNORE_NEW_LINES);
        return password_verify($string, $stored_hash[0]);
        // check password against the stored hash
    }
?>