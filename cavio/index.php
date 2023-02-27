<?php
require 'src/controllers/cavioFunctions.php';
if(isset($_GET['action']) && $_GET['action'] == 'cavio'){
    $resultat = result($_POST);
    format_result($resultat, '#');
}else{
    require 'src/controllers/cavio.php';
}
