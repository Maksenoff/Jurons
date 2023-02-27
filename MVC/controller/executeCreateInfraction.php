<?php

include "../model/fonctionsInfraction.class.php";

session_start();

Infraction::createInfraction($infraction);


header("Location: ../view/infractionView.php");