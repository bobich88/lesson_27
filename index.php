<?php

require_once 'User.php';

$user = new User('Vasia', 2);
// $user->role = 888;
// $user->name = 'Artem';


var_dump($user->getRole());