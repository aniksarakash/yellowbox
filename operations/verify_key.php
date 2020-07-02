<?php
    function is_key_valid($string) {
        // $stored_hash = file_get_contents('../key.txt');
        $stored_hash = '$2y$10$VYaE1scc7h0dqrJwU8/fHu/ckWIPey4c5EYtr0EVkwliCdJ5DRT1e';
        return password_verify($string, $stored_hash);
        // check password against the stored hash
    }
?>