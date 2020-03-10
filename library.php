<?php

$angka = '0123456789';
$kode  = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generateKode($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}