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
        'INVESTIGATEUR' => $inv, 
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

    // Description
    $description1 = getDescription($best1);
    $description2 = getDescription($best2);

    return [$best1, $description1, $lien1, $best2, $description2, $lien2];
}

function getDescription($mot){
    $definions = [
        'INVESTIGATEUR' => "La personnalité de type Investigateur a tendance à être portée sur l’analyse, l’intellect et l’érudition. Cette personne aime la recherche, les activités mathématiques ou scientifiques. Elle a tendance à vivre dans ses pensées et préfère aborder le monde réel à distance. Elle aime lire, étudier, utiliser des livres et d’autres données au lieu de travailler avec ses mains.", 
        'REALISTE' => "La personnalité de type Réaliste aime utiliser ses mains et ses yeux pour explorer le monde et accomplir des choses. Cette personne aime les activités et occupations extérieures, mécaniques et physiques.", 
        'ARTISTIQUE' => "La personnalité de type Artistique utilise ses mains et son esprit pour créer de nouvelles choses. Cette personne apprécie la beauté, les activités non structurées et la variété. Elle aime les personnes, vues, textures et sons intéressants et inhabituels.", 
        'SOCIAL' => "Les personnes de type Social sont des leaders dévoués, humanistes, responsables et solidaires. Elles utilisent les sentiments, les mots et les idées pour travailler avec les gens plutôt que l’activité physique pour effectuer des tâches.", 
        'ENTREPRENANT' => "Qu’est-ce qu’une personne entreprenante ? Elle aime travailler avec les gens, influencer, persuader, diriger ou gérer pour des objectifs organisationnels ou des gains économiques. La personnalité de type Entreprenant est souvent un leader qui a du talent pour organiser, persuader et gérer.", 
        'CONVENITONNEL' => "La personnalité de type Conventionnel aime travailler avec des données et des chiffres, exécuter des tâches en détail et suivre les instructions données par d’autres. Il est calme, prudent, responsable, bien organisé et concentré sur ses tâches"
    ];

    $description = '';
    foreach($definions as $k => $definition){
        if($mot == $k){
            $description = $definition;
            break;
        }
    }
    return $description;
}