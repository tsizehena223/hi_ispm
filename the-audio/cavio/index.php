<?php
require 'src/controllers/cavioFunctions.php';
if(isset($_GET['action']) && $_GET['action'] == 'cavio'){
    $resultat = result($_POST);
    
    $format = format_result($resultat);
    require 'src/templates/resultat.php';
}else{
    require 'src/controllers/cavio.php';
}
