<?php
require('../model/Config.php');



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


