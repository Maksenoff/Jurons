<?php
include_once "../model/DBUserManager.php";

session_start();
$nom = $_GET["Nom"];
$prenom = $_GET["Prenom"];
$pseudo = $_GET["Pseudo"];
$mail = $_GET["Mail"];
$solde = $_GET["Solde"];
$mdp = $_GET["mdp"];
$user = new Utilisateur($nom,$prenom,$mail,$pseudo,$mdp,$solde,2);
DBUserManager::createUser($user);
$_SESSION['utilisateur'] = DBUserManager::readUser();
header("Location:../View/UserManager.php");




?>