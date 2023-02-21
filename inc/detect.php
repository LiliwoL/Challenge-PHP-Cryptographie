<?php

function detect_hash_type($hash) {
    if (preg_match('/^[0-9a-f]{32}$/', $hash)) {
        return "MD5";
    }
    else if (preg_match('/^[0-9a-f]{40}$/', $hash)) {
        return "SHA1";
    }
    else if (preg_match('/^[0-9a-f]{64}$/', $hash)) {
        return "SHA-256";
    }
    else if (preg_match('/^[0-9a-f]{128}$/', $hash)) {
        return "SHA-512";
    }
    else {
        return "Type de hachage non reconnu";
    }
}
