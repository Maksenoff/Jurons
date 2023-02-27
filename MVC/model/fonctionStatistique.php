<?php



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



function calculRemainder($user)
{
    $autre = 0;
    for ($i = 9; $i <= sizeof($user); $i++) {
        PHP_EOL;
        $autre = $autre + $user[$i]->getsolde();
    }
    return $autre;
}