<?php


//Fonction qui permet de trier le tableau de la personne aillant du plus au moins a payer 
//Pour le graphique, on va pouvoir utiliser du tableau 1 à 9 
function createAscendingTable($user)
{
    for ($i = 1; $i <= sizeof($user); $i++) {
        for ($j = 0; $j < sizeof($user); $j++) {
            if ($user[$i]->getsolde() > $user[$j + 1]->getsolde()) {
                $temp = $user[$i];
                $user[$i] = $user[$j + 1];
                $user[$j + 1] = $temp;
            }
        }
    }
    return $user;
}


//Fonction qui fait l'addition de toutes les sommes qui ne sont pas dans le 8 plus élevés  
function calculRemainder($user)
{
    $autre = 0;
    for ($i = 9; $i <= sizeof($user); $i++) {

        $autre = $autre + $user[$i]->getsolde();
    }
    return $autre;
}

//Fonction qui fait l'addition de toutes les sommes 
function calculSum($user)
{
    $somme = 0;
    for ($i = 1; $i <= sizeof($user); $i++) {
    
        $somme = $somme + $user[$i]->getsolde();
    }
    return $somme;



}