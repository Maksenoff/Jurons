<?php
include_once "../model/fonctionsInfraction.class.php";
session_start();

$id = $_POST['ID'];
InfractionManager::deleteInfraction($id);
$_SESSION['infraction'] = InfractionManager::ReadInfraction();
header('Location:../View/InfractionManager.php');


?>