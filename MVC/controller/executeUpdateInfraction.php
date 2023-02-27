<?php

include "../model/fonctionsInfraction.class.php";

session_start();

$choixL = $_POST['modif']; 
$id_infraction = $_POST['ID']; 
$oldLibelle = $_POST['ancienLibelle'];
$newLibelle = $_POST['newLibelle'];



Infraction::updateInfraction();

header("Location: ../view/infractionView.php");