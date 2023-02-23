<?php
include_once "../model/Personne.class.php";
include_once "../model/Utilisateur.class.php";
include_once "../model/Profil.class.php";

$user = new Profil ("user");


$test = new Utilisateur ("Abidbol", "Georges", "izzhbhbzz@izbv", "cowboy", "*****", 1000, $user);




echo $test->affiche();

?>