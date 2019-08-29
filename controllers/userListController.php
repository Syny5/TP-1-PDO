<?php

use Models\User;
$User = new User();
$UserList = $User->getAllUsers();
$pageTitle = 'Liste des utilisateurs';
require_once __DIR__.'/../views/userList.php';