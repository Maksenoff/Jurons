<?php
include_once "../model/Personne.class.php";
include_once "../model/Utilisateur.class.php";
include_once("../model/fonctionStatistique.php");

// $user[1] = new Utilisateur("Abidbol1", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1001, 1);
// $user[2] = new Utilisateur("Abidbol2", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1002, 1);
// $user[3] = new Utilisateur("Abidbol3", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1003, 2);
// $user[4] = new Utilisateur("Abidbol4", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1004, 2);
// $user[5] = new Utilisateur("Abidbol5", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1005, 1);
// $user[6] = new Utilisateur("Abidbol6", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1006, 2);
// $user[7] = new Utilisateur("Abidbol7", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1007, 2);
// $user[8] = new Utilisateur("Abidbol8", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1008, 1);
// $user[9] = new Utilisateur("Abidbol9", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1009, 2);
// $user[10] = new Utilisateur("Abidbol9", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1000, 2);
// $user[11] = new Utilisateur("Abidbol9", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 999, 2);
// $user[12] = new Utilisateur("Abidbol9", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 998, 2);
// $user[13] = new Utilisateur("Abidbol9", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 996, 2);
// $user[14] = new Utilisateur("Abidbol9", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 997, 2);
// $user[15] = new Utilisateur("Abidbol9", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 994, 2);
// $user[16] = new Utilisateur("Abidbol9", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 995, 2);

// $tableAscend = createAscendingTable($user);
// print_r($tableAscend);
// echo PHP_EOL;

// $reste = calculRemainder($tableAscend);
// echo $reste;
// echo PHP_EOL;

// $somme = calculSum($tableAscend);
// echo $somme;
// echo PHP_EOL;





$listeSolde = getSoldes();



$listePrenom = getPrenoms();

$sommeAutre = getSoldesAutre();
