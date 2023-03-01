<?php


//Fonction qui permet de trier le tableau de la personne aillant du plus au moins a payer 
//Pour le graphique, on va pouvoir utiliser du tableau 1 à 9 
function createAscendingTable($user)
{
    for ($i = 1; $i <= sizeof($user); $i++) {
        for ($j = 0; $j < sizeof($user); $j++) {
            if ($user[$i] > $user[$j + 1]) {
                $temp = $user[$i];
                $user[$i] = $user[$j + 1];
                $user[$j + 1] = $temp;
            }
        }
    }
    return $user;
}




function getSoldes(): string
{
    $test = array();
    $con = mysqli_connect("localhost", "root", "", "bdd_jurons");
    if (!$con) {
        echo "connexion échouée";
    }
    $req = mysqli_query($con, "SELECT solde FROM utilisateur");

    foreach ($req as $data) {
        $solde[] = $data['solde'];
    }

    $solde = createAscendingTable($solde);

    for ($i=0; $i <= 7 ; $i++) { 
        $test[$i] = $solde[$i];
    }
  
    $solde = json_encode($test);
    $solde2 = str_replace(array('"', "[", "]"), '', $solde);
    $solde3 = str_replace(array(','), ';', $solde2);
    return $solde3;
}




function getPrenoms(): string
{
    $con = mysqli_connect("localhost", "root", "", "bdd_jurons");
    if (!$con) {
        echo "connexion échouée";
    }
    $req = mysqli_query($con, "SELECT prenom FROM utilisateur");

    foreach ($req as $data) {
        $prenom[] = $data['prenom'];
    }

    $prenom = createAscendingTable($prenom);

    for ($i=0; $i <= 7 ; $i++) { 
        $test[$i] = $prenom[$i];
    }
    
    $prenom = json_encode($test);
    $prenom2 = str_replace(array('"', "[", "]"), '', $prenom);
    $prenom3 = str_replace(array(','), ';', $prenom2);
    return $prenom3;
}










?>