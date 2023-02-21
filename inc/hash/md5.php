<?php

function encrypt_md5($plain_text) {
    return md5($plain_text);
}

/*
 * La fonction de chiffrement utilise la fonction intégrée PHP md5() pour chiffrer le texte en clair.
 *  La fonction de déchiffrement ne peut pas être utilisée car il s'agit d'une fonction de hachage
 * et non pas un chiffrement symétrique. Il n'est pas possible de déchiffrer un message chiffré avec MD5,
 * il est possible de comparer les hash produits par la fonction md5 pour trouver si le texte de départ est le même.
 * Il existe des méthodes pour trouver les messages d'origine avec des attaques de type "force brute"
 * mais cela nécessite un grand nombre de tentatives.
 *  Il est donc fortement déconseillé d'utiliser MD5 pour des utilisations de sécurité.
 *
 */

/**
 * @param $encrypted_text
 * @return string
 */

function decrypt_md5($encrypted_text) {
    // Il n'est pas possible de déchiffrer un message chiffré avec l'algorithme MD5 car il s'agit d'une fonction de hachage.
    // Il n'y a pas de fonction déchiffrement pour MD5, mais on peut utiliser une attaque de type "force brute" pour trouver le message d'origine.
    return "Décryptage impossible avec MD5. Il s'agit d'une fonction de hachage.";
}
