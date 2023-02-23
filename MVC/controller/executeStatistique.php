<?php
include_once "../model/Personne.class.php";
include_once "../model/Utilisateur.class.php";
include_once "../model/Profil.class.php";

$prof1 = new Profil("user");
$prof2 = new Profil("user");
$prof3 = new Profil("user");
$prof4 = new Profil("user");
$prof5 = new Profil("user");
$prof6 = new Profil("user");
$prof7 = new Profil("user");
$prof8 = new Profil("user");
$prof9 = new Profil("user");


$user[1] = new Utilisateur("Abidbol1", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1001, $prof1);
$user[2] = new Utilisateur("Abidbol2", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1002, $prof2);
$user[3] = new Utilisateur("Abidbol3", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1003, $prof3);
$user[4] = new Utilisateur("Abidbol4", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1004, $prof4);
$user[5] = new Utilisateur("Abidbol5", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1005, $prof5);
$user[6] = new Utilisateur("Abidbol6", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1006, $prof6);
$user[7] = new Utilisateur("Abidbol7", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1007, $prof7);
$user[8] = new Utilisateur("Abidbol8", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1008, $prof8);
$user[9] = new Utilisateur("Abidbol9", "Georges", "izzhbhbzz@izbv.fr", "cowboy", "*****", 1009, $prof9);






for ($i = 1; $i <= sizeof($user); $i++) {
    for ($j = 0; $j < sizeof($user); $j++) {
        if ($user[$i]->getsolde() > $user[$j + 1]->getsolde()) {
            $temp = $user[$i];
            $user[$i] = $user[$j + 1];
            $user[$j + 1] = $temp;

        }
    }
}


for ($i = 9; $i <= sizeof($user); $i++) { 
    $autre = 0;
    $autre = $autre + $user[$i]->getsolde();
}






echo $user[1]->affiche();
echo $user[2]->affiche();
echo $user[3]->affiche();
echo $user[4]->affiche();
echo $user[5]->affiche();
echo $user[6]->affiche();
echo $user[7]->affiche();
echo $user[8]->affiche();
echo $user[9]->affiche();
echo  $autre;