<?php
require('../model/Config.php');
include_once "../model/DBUserManager.php";
session_start();

$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$mail = $_POST['Mail'];
$LoginUser = $_POST['loginUser'];
$mdp = $_POST['mdp'];
$mdp_crypte = sha1($mdp);
$solde = 0;
$profil = 2;
$user = new Utilisateur($nom,$prenom,$mail,$LoginUser,$mdp_crypte,$solde,$profil);
DBUserManager::createUser($user);



header("Location:../View/login.php");


?>