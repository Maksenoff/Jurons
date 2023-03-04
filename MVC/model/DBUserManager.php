<?php
include_once "../model/Utilisateur.class.php";
include_once "../model/Profil.class.php";


class DBUserManager{
    public static function createUser(Utilisateur $user):bool{
        //Chaine de connexion à la base de donnée
        $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $status = false ;
         
                $sql = "INSERT INTO `utilisateur`(`Nom`, `Prenom`, `mail`, `loginUser`, `mdp`, `solde`, `id_profil`) VALUES (?,?,?,?,?,?,?)";
                $stmt= $bdd->prepare($sql);
                $status = $stmt->execute([$user->getNom(), $user->getPrenom(), $user->getMail(),$user->getLoginUser(),$user->getPassword(),$user->getSolde(),$user->get_profil()]);
        
        
        return $status;

}
public static function readUser():array{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     
            $sql = "SELECT `id_utilisateur`, `Nom`, `Prenom`,`Mail`, `loginUser`, `solde`, `grade` FROM utilisateur, profil WHERE utilisateur.id_profil= profil.id_profil;";
            $stmt= $bdd->query($sql);
            $array = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    
    return $array;
}
public static function updateUser($nom, $prenom, $mail, $loginUser, $solde, $id): bool
{
    // modification des données
  
    $sql = "UPDATE utilisateur SET `Nom`='$nom',`Prenom`='$prenom',`mail`='$mail',`loginUser`='$loginUser',`solde`='$solde' WHERE `id_utilisateur`=$id;";
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $bdd->prepare($sql);
    $update = $stmt->execute();
    return $update;
}
public static function deleteUser(): bool
{
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    $id = $_POST['ID'];
    $sql = "DELETE FROM `utilisateur` WHERE id_utilisateur=$id";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute();
    return $status;
}
public static function readProfil($grade):array{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     
            $sql = "SELECT `id_profil` FROM `profil` WHERE grade='[$grade]'";
            $stmt= $bdd->query($sql);
            $array = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    
    return $array;
}
public static function createProfil(Profil $profil):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false ;
     
            $sql = "INSERT INTO `profil`(`grade`) VALUES (?)";
            $stmt= $bdd->prepare($sql);
            $status = $stmt->execute([$profil->getGrade()]);
    
    
    return $status;

}

//méthode pour retrouver la balance à partir de l' id balance de la table balance.
public static function selectCollabo($id_balance): array{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     
            $sql = "SELECT * FROM `utilisateur` WHERE `id_utilisateur` = $id_balance";
            $stmt= $bdd->query($sql);
            $array = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    
    return $array;
}

public static function selectSoldeUtilisateur($id_utilisateur): array{
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     
            $sql = "SELECT `id_utilisateur`, `Nom`, `Prenom`,`solde` FROM `utilisateur` WHERE `id_utilisateur` = $id_utilisateur";
            $stmt= $bdd->query($sql);
            $array = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    
    return $array;
}

public static function updateSoldeUser($solde, $id_utilisateur): bool{
    // modification des données
  
    $sql = "UPDATE `utilisateur` SET `solde`='$solde' WHERE `id_utilisateur`= $id_utilisateur";
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $bdd->prepare($sql);
    $update = $stmt->execute();
    return $update;
}
public static function Login($loginUser,$mdp):bool{
    $mdp_crypte = sha1($mdp);
    var_dump($mdp_crypte);

    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '');
    $sql = "SELECT * FROM utilisateur WHERE loginUser='$loginUser' and mdp='$mdp_crypte'";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($user);
    $_SESSION['User'] = $user;
    if (count($user) > 0 ) {
        return true;
    }else {
        return false;
    }   
}

}

// print_r(DBUserManager::selectCollabo(1));

// print_r(DBUserManager::readProfil('Admin'));




// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = //
// = = = = = = = = = = = = Toutes les méthodes sous = = = = = = = = = = = = = = = = =//
// = = = = = = = = = = = = = forme de Fonctions = = = = = = = = = = = = = = = = = = =//
// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = //



// function createUser(Utilisateur $user):bool{
//     //Chaine de connexion à la base de donnée
//     $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//     $status = false ;
     
//             $sql = "INSERT INTO utilisateur (Nom, Prenom, mail, loginUser, mdp ) VALUES (?,?,?,?,?)";
//             $stmt= $bdd->prepare($sql);
//             $status = $stmt->execute([$user->getNom(), $user->getPrenom(), $user->getMail(),$user->getLoginUser(),$user->getPassword()]);
    
    
//     return $status;
// }

// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = //

// function readUser():array{
//     //Chaine de connexion à la base de donnée
//     $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     
//             $sql = "SELECT Nom, Prenom, solde FROM utilisateur";
//             $stmt= $bdd->query($sql);
//             $array = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    
//     return $array;
// }

// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = //

// function updateUser(): bool
// {
//     // modification des données
//     $nom = $_POST['Nom'];
//     $prenom = $_POST['Prenom'];
//     $mail = $_POST['Mail'];
//     $loginUser = $_POST['LoginUser'];
//     $id = $_POST['ID'];
//     $sql = "UPDATE utilisateur SET Nom='$nom', Prenom='$prenom' WHERE ID='$id'";
//     $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//     $stmt = $bdd->prepare($sql);
//     $update = $stmt->execute();
//     return $update;
// }

// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = //

// function deleteUser(): bool
// {
//     $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//     $status = false;
//     $id = $_POST['ID'];
//     $sql = "DELETE * FROM utilisateur WHERE ID='$id'";
//     $stmt = $bdd->prepare($sql);
//     $status = $stmt->execute();
//     return $status;
// }

// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = //
