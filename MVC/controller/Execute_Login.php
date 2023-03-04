<?php
require('../model/Config.php');
include_once "../model/DBUserManager.php";
session_start();

$loginUser = $_POST['loginUser'];
$mdp = $_POST['mdp'];
// $loginUser = "TEST";
// $mdp = "mdp";
$verif = DBUserManager::Login($loginUser,$mdp);
var_dump($verif);
if ($verif) {
    header("Location:../View/home.php");
}else {
    header("Location:../View/login.php");
}



?>


