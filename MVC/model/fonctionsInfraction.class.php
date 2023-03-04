<?php 
include_once "../model/Infraction.class.php";


class InfractionManager { 

//insertion dans la bdd d'un objet infraction
public static function createInfraction(Infraction $infraction ) : bool {
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false ;

    $sql = "INSERT INTO `infraction`(`libelle`, `tarif`) VALUES (?,?)";

    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute([$infraction->getLibelle(),$infraction->getTarif()]); 

    return $status;

}

//modification d'une infraction dans la bdd
public static function updateInfraction($id,$libelle,$tarif) : bool {
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    $sql=("UPDATE `infraction` SET `libelle`='$libelle',`tarif`='$tarif' WHERE `id_infraction`='$id'");


    $stmt= $bdd->prepare($sql);
    $update = $stmt->execute(); 

    return $update;
    
}


public static function deleteInfraction($id) : bool {
    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $status = false;
    

    $sql = "DELETE FROM `infraction` WHERE `id_infraction` = '$id'";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute();

    return $status;
    
}


public static function ReadInfraction():array {

        $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        $sql = "SELECT * FROM `infraction`";
        
        $stmt= $bdd->query($sql);
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $array;
    
}

public static function statCamenbert() {

    
}

public static function selectTarif($id_infraction): array  {

    $bdd = new PDO('mysql:host=localhost;dbname=mld_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
    $sql = "SELECT * FROM `infraction` WHERE `id_infraction` = $id_infraction";
        
    $stmt= $bdd->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $array;
}

}

//test

// $infraction = new Infraction("retard 60 min", 0.60);
// InfractionManager::createInfraction($infraction);

// print_r(InfractionManager::historique());
?>