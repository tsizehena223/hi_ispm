<?php

if (!isset($_SESSION['auth'])) {
    $_SESSION['flash']['error'] = "Vous n'êtes pas encore connecté!";
?>
    <script>
        location.replace("./connexion_view.php");
    </script>
<?php }
