<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'users';

$mysqli = new mysqli($host, $user, $pass, $db);
$mysqli->set_charset('utf8');


$query = "SELECT * FROM users";
$result = $mysqli->query($query);

$users = [];
while($user = $result->fetch_assoc()) {
    $users[] = $user;

}

var_dump($users);