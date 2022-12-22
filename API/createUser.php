<?php
// leggo il contenuto del file e lo salvo sotto forma di stringa in una variabile
$users = file_get_contents("../users.json");

// converto la stringa $users in un array. 
// Il secondo argomento "true" indica che vogliamo avere un array associativo
$users = json_decode($users, true);

$newUser = [
  "newtask" => $_POST["newtask"],
  
];

$users[] = $newUser;



// converto l'array in una stringa JSON
$usersJson = json_encode($users, JSON_PRETTY_PRINT);

// salva la stringa usersJson nel file users.json
file_put_contents("../users.json", $usersJson);

header("Content-Type: application/json");
echo json_encode($newUser);
