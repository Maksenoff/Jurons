<?php
include_once "../model/DBUserManager.php";
include_once "../model/Utilisateur.class.php";





// $tab = DBUserManager::readProfil('Admin');
// $profilId = $tab[0]['id_profil'];
// print_r($tab[0]['id_profil']);
// $user = new Utilisateur("Maksen","ICHALLALEN","maksen.ichapp@gmail.com","Maksenoff","123",20,1);
// DBUserManager::createUser($user);
$profil = new Profil("User");
DBUserManager::createProfil($profil);
// print_r(DBUserManager::readUser());
// DBUserManager::updateUser();
// DBUserManager::deleteUser(17);





?>