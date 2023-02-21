<?php

include "../modele/fonctionsInfraction.php";

session_start();

$statut = historique();

if ($statut) {
    echo "ok!!!";
} else {
    echo "KO!!!";
}
// $filePath = $maListe;
// $data = rewriteData($filePath);
// generateTable($data);

header("Location: ../view/infractionView.php");