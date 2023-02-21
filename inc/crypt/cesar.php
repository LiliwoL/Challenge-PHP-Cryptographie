<?php


function encrypt_cesar($plain_text, $shift) {
    $encrypted_text = "";
    for ($i = 0; $i < strlen($plain_text); $i++) {
        $char = $plain_text[$i];
        if (ctype_alpha($char)) {
            $char = strtoupper($char);
            $encrypted_text .= chr((ord($char) + $shift - 65) % 26 + 65);
        } else {
            $encrypted_text .= $char;
        }
    }
    return $encrypted_text;
}

function decrypt_cesar($encrypted_text, $shift) {
    $plain_text = "";
    for ($i = 0; $i < strlen($encrypted_text); $i++) {
        $char = $encrypted_text[$i];
        if (ctype_alpha($char)) {
            $char = strtoupper($char);
            $plain_text .= chr((ord($char) - $shift - 90) % 26 + 90);
        } else {
            $plain_text .= $char;
        }
    }
    return $plain_text;
}
