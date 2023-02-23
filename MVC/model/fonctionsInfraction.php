<?php 


function createInfraction() {
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=Jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    $sql = "INSERT INTO infraction (libelle, tarif) VALUES (?,?)";

    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute(); 

    return $status;

}


function updateInfraction( $id_infraction, $choixL, $oldLibelle, $newLibelle, $choixF, $oldTarif, $newTarif) {
    $bdd = new PDO('mysql:host=localhost;dbname=Jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    

    $sql=("UPDATE infraction SET $choixL = '$newLibelle' WHERE $choixL = '$oldLibelle' AND SET $choixF = '$newTarif' WHERE $choixF = '$oldTarif' AND ID = '$id_infraction'");


    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute(); 

    return $status;
    
}


function deleteInfraction($id_infraction) {
    $bdd = new PDO('mysql:host=localhost;dbname=Jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    

    $sql = "DELETE FROM infraction WHERE id = '$id_infraction'";
    $stmt= $bdd->prepare($sql);
    $status = $stmt->execute();

    return $status;
    
}


function historique() {

        $bdd = new PDO('mysql:host=localhost;dbname=Jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        $sql = "SELECT * FROM balance";
        
        $stmt= $bdd->prepare($sql);
        $stmt ->execute();
        $historique= $stmt->fetchAll();
        return $historique;
    
}

function statCamenbert() {

    $bdd = new PDO('mysql:host=localhost;dbname=Jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
    $sql = "SELECT prenom, solde FROM Utilisateur";

    $stmt= $bdd->prepare($sql);
    $stmt ->execute();
    $user= $stmt->fetchAll();
    return $user;
}