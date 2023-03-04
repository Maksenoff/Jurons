<?php
include_once "../model/DBUserManager.php";
include_once "../model/Balance.class.php";
include_once "../model/DBBalanceManager.php";
include_once "../model/fonctionsInfraction.class.php";

session_start();

//On récuppère les différentes variables
$id_utilisateur = $_GET['utilisateur'];
$id_infraction = $_GET['infra'];


//On affiche la liste des utilisateurs
$_SESSION['listInfraction'] = DBUserManager::readUser();

//On afficher les infractions
$_SESSION['menuInfractions'] = InfractionManager::ReadInfraction();

header('Location: ../view/Infraction.php');

//On créer des infractions

$today = date("d-m-Y");
$collabo = $_SESSION['User'][0]['id_utilisateur'];
$balance = new Balance($id_utilisateur, $id_infraction, $today , $collabo);
DBBalanceManager::createBalance($balance);

//On modifie le solde de l'utilisateur en fonction de l'infraction
    //On cherche le solde de l'utilisateur
$tabSolde = DBUserManager::selectSoldeUtilisateur($id_utilisateur);
$solde = $tabSolde[0]['solde'];

    //On cherche le tarif de l'infraction
$tabTarif = InfractionManager::selectTarif($id_infraction);
$tarif = $tabTarif[0]['tarif'];

    //On met à jour le solde de l'utilisateur
$solde = $solde + $tarif;
DBUserManager::updateSoldeUser($solde, $id_utilisateur);

//On affiche la liste des utilisateurs
$_SESSION['listInfraction'] = DBUserManager::readUser();

?>