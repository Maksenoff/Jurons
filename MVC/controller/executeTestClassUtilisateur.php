<?php
include_once "../model/Personne.class.php";
include_once "../model/Utilisateur.class.php";

$test = new Utilisateur ("Abidbol", "Georges", "izzhbhbzz@izbv", "cowboy", "*****", 1000);

echo $test->affiche();

?>