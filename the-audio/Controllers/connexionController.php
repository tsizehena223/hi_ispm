<?php

use App\Users;

require '../App/User.php';
// require '../vendor/autoload.php'; // MBOLA TSY MANDE

if (isset($_POST['connexion'])) {
    $nom = htmlspecialchars($_POST['name']);
    $psw = $_POST['mdp'];

    $user = new Users();
    $_user = $user->get_user($nom);
    if ($_user == null) {
        session_start();
        $_SESSION['flash']['error'] = "Utilisateur non enregistré!";
        header("Location: ../other-page/Login_v4/log-In.php");
    } else {
        if (password_verify($psw, $_user['password'])) {
            // die("okey");
            session_start();
            $_SESSION['auth'] = $nom;
            $_SESSION['flash']['success'] = "Connected successfully!";
            header("Location: ../Views/yes.php");
        } else {
            session_start();
            $_SESSION['flash']['error'] = "Mot de passe incorrect!";
            header("Location: ../other-page/Login_v4/log-In.php");
        }
    }
}
