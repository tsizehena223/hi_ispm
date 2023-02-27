<?php

use App\Users;

// require '../vendor/autoload.php'; // MBOLA TSY MANDE
require '../App/User.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['inscription'])) {
    if (empty($_POST['name']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['name'])) {
        $_SESSION['flash']['error'] = "Nom invalide";
    } elseif (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['flash']['error'] = "Email invalide";
    } elseif (empty($_POST['mdp']) || empty($_POST['mdp']) || $_POST['mdp'] != $_POST['mdp2']) {
        $_SESSION['flash']['error'] = "Mot de passe invalide";
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $psw = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

        $user = new Users();
        $user->set_name($name);
        $user->set_psw($psw);
        $user->set_email($email);

        $user->insert_user("e404", "users", $name, $psw, $email);

        session_start();
        $_SESSION['flash']['success'] = "Utilisateur bien enregistré!";
    }
}

header('Location: ../other-page/Login_v4/inscrire.php');
