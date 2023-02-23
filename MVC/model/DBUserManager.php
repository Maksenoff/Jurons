<?php
include_once "../model/Utilisateur.class.php";


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
     
            $sql = "SELECT `id_utilisateur` `Nom`, `Prenom`, `loginUser`, `solde`, `grade` FROM utilisateur, profil WHERE utilisateur.id_profil= profil.id_profil;";
            $stmt= $bdd->query($sql);
            $array = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    
    return $array;
}
public static function updateUser(): bool
{
    // modification des données
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $mail = $_POST['Mail'];
    $loginUser = $_POST['LoginUser'];
    $solde = $_POST['Solde'];
    $id = $_POST['ID'];
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
}

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
