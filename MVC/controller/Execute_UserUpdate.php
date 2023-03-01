<?php
include_once "../model/DBUserManager.php";
session_start();
$_SESSION["utilisateur"]=DBUserManager::updateUser();
$_SESSION['utilisateur'] = DBUserManager::readUser();
header("Location:../View/UserManager.php");
?>