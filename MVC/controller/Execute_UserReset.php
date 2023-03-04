<?php
include_once "../model/DBUserManager.php";


$idUser = $_POST['ID'];
$solde = 0 ;
DBUserManager::updateSoldeUser($solde,$idUser);
header("Location:../controller/Execute_ReadUser.php")


?>