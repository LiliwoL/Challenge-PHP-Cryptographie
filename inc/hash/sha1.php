<?php

function encrypt_sha1($plain_text) {
    return sha1($plain_text);
}

function decrypt_sha1($encrypted_text) {
    // Il n'est pas possible de déchiffrer un message chiffré avec l'algorithme SHA1 car il s'agit d'une fonction de hachage.
    // Il n'y a pas de fonction déchiffrement pour SHA1, mais on peut utiliser une attaque de type "force brute" pour trouver le message d'origine.
    return "Décryptage impossible avec SHA1. Il s'agit d'une fonction de hachage.";
}
