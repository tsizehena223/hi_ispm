<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Connexion</title>
</head>

<body>
    <center>
        <div class="signin-box">
            <h1>Connexion</h1>
            <center>
                <?php
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                if (isset($_SESSION['flash']['error'])) :  ?>
                    <div class="alert alert-danger col-md-4">
                        <?= $_SESSION['flash']['error'] ?>
                    </div>
                <?php
                    unset($_SESSION['flash']['error']);
                endif;
                ?>
                <?php
                if (isset($_SESSION['flash']['success'])) :  ?>
                    <div class="alert alert-success col-md-4">
                        <?= $_SESSION['flash']['success'] ?>
                    </div>
                <?php
                    unset($_SESSION['flash']['success']);
                endif;
                ?>
            </center>
            <form action="../Controllers/connexionController.php" method="post">
                <div class="col-md-4">
                    <label>Pseudo : </label>
                    <input type="text" placeholder="Votre nom" name="name" required class="form-control" /> <br><br>
                </div>
                <div class="col-md-4">
                    <label>Mot de passe : </label>
                    <input type="password" placeholder="Mot de passe" name="mdp" required class="form-control" /> <br><br>
                </div>
                <div class="row col-md-3">
                    <button type="submit" name="connexion" class="btn btn-danger">Se connecter</button> &nbsp;
                    <a href="inscription_view.php" class="btn btn-outline-info">S'inscrire</a>
                </div>
            </form>
        </div>
    </center>
</body>

</html>