<?php

include "../modele/fonctionsInfraction.php";

session_start();

$status = createInfraction();


header("Location: ../view/infractionView.php");