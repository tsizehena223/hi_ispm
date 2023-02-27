<?php

session_start();

if (isset($_SESSION['auth'])) {
    unset($_SESSION['auth']);
    $_SESSION['flash']['success'] = "Log out successfully!";
} else {
    $_SESSION['flash']['error'] = "Vous n'êtes pas connecté!";
}
header("Location: ");
