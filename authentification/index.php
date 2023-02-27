<?php

define('URL', dirname(__FILE__));
define('URL_VRAI', dirname(URL));
define('DS2', DIRECTORY_SEPARATOR);

if (isset($_GET["p"])) {
    $p = $_GET['p'];
} else {
    $p = "connexion";
}
$pages = explode('/', $p);
$page = $pages[0];

if ($page != null) {
    $fichier = URL_VRAI . DS2 . 'authentification' . DS2 . 'Views' . DS2 . $page . '_view.php';
    // die($fichier);
    if (file_exists($fichier)) {
        include $fichier;
    } else {
        include '404.php';
    }
}
