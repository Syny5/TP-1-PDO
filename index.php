<?php
include_once 'vendor/autoload.php';
include_once 'config.php';
// Si on est à l'accueil, renvoie vers la landing page
$page = !empty($_GET['path']) ? $_GET['path'] : '/';
if($page != '/'){
    if(file_exists('controllers/'.$page.'Controller.php')){
        require_once 'controllers/'.$page.'Controller.php';
    }else{
        require_once 'views/404.php';
    }
}else{
    require_once 'views/accueil.php';
}
// Si y'a pas de /, va chercher cette page-là
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

