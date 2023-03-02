<?php
include_once "../model/DBUserManager.php";

session_start();

$_SESSION['listInfraction'] = DBUserManager::readUser();

header('Location: ../view/Infraction.php')
?>