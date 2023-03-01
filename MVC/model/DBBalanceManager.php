<?php
include_once "../model/Balance.class.php";


class DBBalanceManager 
{
    //insertion d'un objet balance
    public static function createBalance(Balance $balance) : bool{
        $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $status = false ;

        $sql = "INSERT INTO `balance`(`id_utilisateur`, `id_infraction`, `dateBalance`, `id_balance`) VALUES (?,?,?,?)";

        $stmt= $bdd->prepare($sql);
        $status = $stmt->execute([$balance->getId_utilisateur(),$balance->getId_infraction(), $balance->getDateBalance(), $balance->getId_balance()]); 

        return $status;
    }

    //modification de la table balance
    public static function updateBalance(): bool {
        $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    
        $id_utilisateur = $_POST['id_utilisateur'];
        $id_infraction = $_POST['id_infraction'];
        $dateBalance = $_POST['dateBalance'];
        $id_balance = $_POST['id_balance'];
        $id_primary = $_POST['id_primary'];
    
        $sql=("UPDATE `balance` SET `id_utilisateur`='$id_utilisateur',`id_infraction`='$id_infraction',`dateBalance`='$dateBalance',`id_balance`='$id_balance' WHERE `id_primary`= '$id_primary'");
    
    
        $stmt= $bdd->prepare($sql);
        $update = $stmt->execute(); 
    
        return $update;
    }

    //suppression d'un ligne de la table balance
    public static function deleteBalance(): bool{
        $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $status = false;
        $id_primary = $_POST['id_primary'];

        $sql = "DELETE FROM `balance` WHERE `id_primary`= '$id_primary'";
        $stmt= $bdd->prepare($sql);
        $status = $stmt->execute();

        return $status;
    }

    //fonction pour afficher 
    public static function readBalance():array{
        $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     
            $sql = "SELECT `id_primary`, balance.`id_utilisateur`, `Nom`, `Prenom`, balance.`id_infraction`, `libelle`, `dateBalance`, `id_balance` FROM `balance`, `utilisateur`, `infraction`  WHERE utilisateur.id_utilisateur=balance.id_utilisateur AND balance.id_infraction=infraction.id_infraction";
            $stmt= $bdd->query($sql);
            $array = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    
    return $array;

    }
}

//test

// $balance = new Balance (1, 1, "01-03-2023", 2);
// DBBalanceManager::createBalance($balance);

// DBBalanceManager::updateBalance(1, 1, "27-02-2023", 2, 2);
// DBBalanceManager::deleteBalance(2);

// print_r(DBBalanceManager::readBalance());
?>