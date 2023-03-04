<?php
include_once "../model/fonctionsInfraction.class.php";
session_start();
$libelle = $_POST['Libelle'];
$tarif = $_POST['Tarif'];
$infraction = new Infraction($libelle, $tarif);
InfractionManager::createInfraction($infraction);
$_SESSION['infraction'] = InfractionManager::ReadInfraction();
header("Location:../View/InfractionManager.php");





?>