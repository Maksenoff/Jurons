<?php 

class Infraction {

public static function createInfraction(Infraction $infraction) : bool {
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false ;

    $sql = "INSERT INTO infraction (libelle, tarif) VALUES (?,?)";

    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute([$infraction->getLibelle(),$infraction->getTarif()]); 

    return $status;

}


public static function updateInfraction() : bool {
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    
    $libelle = $_POST['Libelle'];
    $tarif = $_POST['Tarif'];
    $id_infraction = $_POST['ID'];

    $sql=("UPDATE infraction SET $libelle = 'Libelle' WHERE $tarif = 'Tarif' WHERE id_infraction = '$id_infraction'");


    $stmt= $bdd->prepare($sql);
    $update = $stmt->execute(); 

    return $update;
    
}


public static function deleteInfraction($id_infraction) : bool {
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $status = false;
    $id_infraction = $_POST['ID'];

    $sql = "DELETE FROM infraction WHERE id = '$id_infraction'";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute();

    return $status;
    
}


public static function historique() {

        $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        $sql = "SELECT * FROM balance";
        
        $stmt= $bdd->prepare($sql);
        $stmt ->execute();
        $historique= $stmt->fetchAll();
        return $historique;
    
}

public static function statCamenbert() {

    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
    $sql = "SELECT prenom, solde FROM Utilisateur GROUP BY prenom" ;

    $stmt= $bdd->prepare($sql);
    $stmt ->execute();
    $camembert= $stmt->fetchAll();
    return $camembert;
}

}