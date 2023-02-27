<?php
include_once "../model/DBUserManager.php";
session_start();
$_SESSION['listUser'] = DBUserManager::readUser();

print_r($_SESSION['listUser']);

header('Location: ../view/historique.php');
?>