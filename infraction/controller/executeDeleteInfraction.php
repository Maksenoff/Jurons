<?php

include "../modele/fonctionsInfraction.php";

session_start();

$id = $_POST['id'];
 
deleteInfraction($id_infraction);


header("Location: ../view/infractionView.php");