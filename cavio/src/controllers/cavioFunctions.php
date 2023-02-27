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
        'ARTISTE' => $art, 
        'SOCIALE' => $soci, 
        'ENTREPRENEUR' => $ent, 
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

function format_result($resBest, $lien){
    $best1 = $resBest[0][0];
    $best2 = $resBest[1][0];
    echo "<a href=\"$lien\">$best1</a><br>";
    echo "<a href=\"$lien\">$best2</a>";
}