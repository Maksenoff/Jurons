<?php
require('../model/Config.php');
include_once "../model/DBUserManager.php";


$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$mail = $_POST['Mail'];
$LoginUser = $_POST['loginUser'];
$mdp = $_POST['mdp'];
$solde = 0;
$profil = 2;
$user = new Utilisateur($nom,$prenom,$mail,$LoginUser,$mdp,$solde,$profil);
DBUserManager::createUser($user);

if (isset($_POST['loginUser'])){
    $username = stripslashes($_REQUEST['loginUser']);
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_REQUEST['mdp']);
    $password = mysqli_real_escape_string($conn, $password);
      $query = "SELECT * FROM `utilisateur` WHERE loginUser='$username' and mdp='$password'";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_num_rows($result);
    if($rows==True){
        $_SESSION['loginUser'] = $username;
        header("Location:../View/Home.html");
    }else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }


?>