<?php
function result($arr){
    $res = getResult($arr);
    $i = 1;
    $resBest = [];
    foreach($res as $k => $n){
        $resBest[] = [$k, $n];
        if($i == 2){
            break;
        }
        $i++;
    }
    return $resBest;
}

function getResult($arr){

    $inv = compteur('I', $arr);
    $rea = compteur('R', $arr);
    $art = compteur('A', $arr);
    $soci = compteur('S', $arr);
    $ent = compteur('E', $arr);
    $conv = compteur('V', $arr);

    $res = [
        'INVERTIGATEUR' => $inv, 
        'REALISTE' => $rea, 
        'ARTISTIQUE' => $art, 
        'SOCIAL' => $soci, 
        'ENTREPRENANT' => $ent, 
        'CONVENITONNEL' => $conv
    ];
    arsort($res);
    return $res;
}

function compteur(String $s, array $arr){
    $cpt = 0;
    $key = array_keys($arr);
    $i = 0;
    foreach($arr as $n){
        $key = array_keys($arr);
        $key[$i][0];
        if($s == $key[$i][0]){
            $cpt += (int)$n;
        }
        $i++;
    }
    return $cpt;
}
function format_result($resBest){
    $best1 = $resBest[0][0];
    $best2 = $resBest[1][0];

    // Generate Url
    $lien1 = strtolower($best1);
    $lien2 = strtolower($best2);
    $lien1 = "https://www.123test.com/fr/la-personnalite-de-type-$lien1/";
    $lien2 = "https://www.123test.com/fr/la-personnalite-de-type-$lien2/";
    echo "<a href=\"$lien1\">$best1</a><br>";
    echo "<a href=\"$lien2\">$best2</a>";
}