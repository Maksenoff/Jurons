<?php
include_once "../model/fonctionsInfraction.class.php";
session_start();
$_SESSION['infraction'] = InfractionManager::ReadInfraction();
header('Location:../View/InfractionManager.php');





?>