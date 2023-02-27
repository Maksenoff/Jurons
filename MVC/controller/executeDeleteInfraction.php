<?php

include "../model/fonctionsInfraction.class.php";

session_start();

$id_infraction = $_POST['ID'];
 
Infraction::deleteInfraction($id_infraction);


header("Location: ../view/infractionView.php");