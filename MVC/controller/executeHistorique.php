<?php
include_once "../model/DBUserManager.php";
include_once "../model/DBBalanceManager.php";
session_start();
$_SESSION['listBalance'] = DBBalanceManager::readBalance();

for ($i=0; $i < count($_SESSION['listBalance']); $i++) { 
   $balance[$i] =  $_SESSION['listBalance'] [$i]['id_balance'];
   $_SESSION['laBalance'][$i] = DBUserManager::selectCollabo($balance[$i]);
}



// print_r($_SESSION['listBalance']);
// print_r($_SESSION['laBalance']);

header('Location: ../view/historique.php');
?>