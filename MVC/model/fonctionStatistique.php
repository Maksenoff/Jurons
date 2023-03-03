<?php


//Fonction qui permet de trier le tableau de la personne aillant du plus au moins a payer 
//Pour le graphique, on va pouvoir utiliser du tableau 1 à 9 
function createAscendingTable($user)
{
    for ($i =0; $i < sizeof($user); $i++) {
        for ($j = 1; $j <= sizeof($user); $j++) {
            if ($user[$i] > $user[$j-1]) {
                $temp = $user[$i];
                $user[$i] = $user[$j-1];
                $user[$j - 1] = $temp;
            }
        }
    }
    return $user;
}




function getSoldes(): string
{
    $test = array();
    $con = mysqli_connect("localhost", "root", "", "mld_jurons");
    if (!$con) {
        echo "connexion échouée";
    }
    $req = mysqli_query($con, "SELECT solde FROM utilisateur");

    foreach ($req as $data) {
        $solde[] = $data['solde'];
    }

   
    $solde = createAscendingTable($solde);

    for ($i = 0; $i <= 7; $i++) {
        $test[$i] = $solde[$i];
    }

    $solde = json_encode($test);
    $solde2 = str_replace(array('"', "[", "]"), '', $solde);
    $solde3 = str_replace(array(','), ';', $solde2);
    return $solde3;
}






function getPrenoms(): string
{
    $huitPrenoms = array();
    $huitSoldes = array();
    $con = mysqli_connect("localhost", "root", "", "mld_jurons");
    if (!$con) {
        echo "connexion échouée";
    }
    $req = mysqli_query($con, "SELECT solde, prenom FROM utilisateur");

    foreach ($req as $data) {
        $soldes[] = $data['solde'];
        $prenoms[]= $data['prenom'];
    }

    $prenoms = createAscendingTable2($soldes, $prenoms);

    for ($i = 0; $i <= 7; $i++) {
        
        $huitPrenoms[$i] = $prenoms[$i];
    }

    $prenoms = json_encode($huitPrenoms);
    $prenoms2 = str_replace(array('"', "[", "]"), '', $prenoms);
    $prenoms3 = str_replace(array(','), ';', $prenoms2);
    return $prenoms3;
}



function createAscendingTable2($user , $user2)
{
    for ($i =0; $i < sizeof($user); $i++) {
        for ($j = 1; $j <= sizeof($user); $j++) {
            if ($user[$i] > $user[$j-1]) {

                $temp = $user[$i];
                $user[$i] = $user[$j-1];
                $user[$j - 1] = $temp;

                $temp = $user2[$i];
                $user2[$i] = $user2[$j-1];
                $user2[$j - 1] = $temp;

            }
        }
    }
    return $user2;
}




function getSoldesAutre(): float
{
    $test = array();
    $con = mysqli_connect("localhost", "root", "", "mld_jurons");
    if (!$con) {
        echo "connexion échouée";
    }
    $req = mysqli_query($con, "SELECT solde FROM utilisateur");

    foreach ($req as $data) {
        $solde[] = $data['solde'];
    }

   
    $solde = createAscendingTable($solde);

    for ($i = 8; $i <= sizeof($solde); $i++) {
        $sommeAutre = $sommeAutre + $solde[$i];
    }

    return $sommeAutre;
}







// function getPrenoms(): string
// {
//     $con = mysqli_connect("localhost", "root", "", "bdd_jurons");
//     if (!$con) {
//         echo "connexion échouée";
//     }
//     $req = mysqli_query($con, "SELECT solde, prenom FROM utilisateur");

//     foreach ($req as $data) {

//         $prenom[] = $data['prenom'];
//     }

//     $prenom = createAscendingTable($prenom);

//     for ($i=0; $i <= 7 ; $i++) { 
//         $test[$i] = $prenom[$i];
//     }

//     $prenom = json_encode($test);
//     $prenom2 = str_replace(array('"', "[", "]"), '', $prenom);
//     $prenom3 = str_replace(array(','), ';', $prenom2);
//     return $prenom3;
// }







?>