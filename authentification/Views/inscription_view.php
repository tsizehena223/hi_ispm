<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <div class="signup-box">
        <h1>Inscription</h1>
        <center>
            <h2 style="color: red">
                <?php
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                if (isset($_SESSION['flash']['error'])) {
                    echo $_SESSION['flash']['error'];
                }
                unset($_SESSION['flash']['error']);
                ?>
            </h2>
            <h2 style="color: green">
                <?php
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                if (isset($_SESSION['flash']['success'])) {
                    echo $_SESSION['flash']['success'];
                }
                unset($_SESSION['flash']['success']);
                ?>
            </h2>
        </center>
        <h4>C'est gratuit et ne prend que quelques sécondes</h4>
        <form action="../Controllers/inscriptionController.php" method="post">
            <label>Pseudo : </label>
            <input type="text" placeholder="Votre nom" name="name" required /> <br><br>
            <label>Email</label>
            <input type="email" placeholder="Vore email" name="email" required /> <br><br>
            <label>Password</label>
            <input type="password" placeholder="Mot de passe" name="mdp" required /> <br><br>
            <label>Confirm Password</label>
            <input type="password" placeholder="Mot de passe" name="mdp2" required /> <br><br>
            <button type="submit" name="inscription">S'inscrire</button>
        </form>
    </div>
    <p class="para-2">
        Vous avez déjà un compte ? <a href="connexion_view.php">Se connecter ici</a>
    </p>
</body>

</html>