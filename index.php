<?php

// Include
include_once ('inc/crypt/cesar.php');
include_once ('inc/hash/md5.php');
include_once ('inc/hash/sha1.php');
include_once ('inc/detect.php');

// Main
$plain_text = "Texte à chiffrer";
$shift = 3;
$encrypted_text = encrypt_cesar($plain_text, $shift);
echo "Texte original : " . $plain_text . "\n";
echo "Texte chiffré : " . $encrypted_text . "\n";


$decrypted_text = decrypt_cesar($encrypted_text, $shift);
echo "Texte déchiffré : " . $decrypted_text . "\n";
