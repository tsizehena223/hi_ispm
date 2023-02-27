<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yes</title>
</head>

<body>
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
</body>

</html>