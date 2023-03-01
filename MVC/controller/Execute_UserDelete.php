<?php
include_once "../model/DBUserManager.php";
session_start();
$_SESSION['utilisateur']=DBUserManager::deleteUser();
$_SESSION['utilisateur'] = DBUserManager::readUser();
header("Location:../View/UserManager.php");



?>