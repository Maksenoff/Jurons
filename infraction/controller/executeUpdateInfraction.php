<?php

include "../modele/fonctionsInfraction.php";

session_start();

$choixL = $_POST['modif']; 
$id_infraction = $_POST['id']; 
$oldLibelle = $_POST['ancienLibelle'];
$newLibelle = $_POST['newLibelle'];

$choixF = $_POST['modif']; 
$id_infraction = $_POST['id']; 
$oldTarif = $_POST['ancienTarif'];
$newTarif = $_POST['newTarif'];

updateInfraction( $id_infraction, $choixL, $oldLibelle, $newLibelle, $choixF, $oldTarif, $newTarif);

header("Location: ../view/infractionView.php");