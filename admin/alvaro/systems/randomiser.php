<?php

   function generateRandomString($length = 30) {
    $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ-';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$minse=generateRandomString(5);
$logonadminsessions = generateRandomString(255);
?>