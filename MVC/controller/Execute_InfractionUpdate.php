<?php

include_once "../model/fonctionsInfraction.class.php";
session_start();
$libelle = $_POST['Libelle'];
$tarif = $_POST['Tarif'];
$id = $_POST['ID'];
InfractionManager::updateInfraction($id,$libelle,$tarif);
$_SESSION['infraction'] = InfractionManager::ReadInfraction();
header('Location:../View/InfractionManager.php');



?>