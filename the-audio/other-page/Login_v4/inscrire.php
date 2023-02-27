<!DOCTYPE html>
<html lang="en">

<head>
	<title>Inscription</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
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
	<div class="content">
		<div class="img-div">
			<img src="../../img/login-amico.png" alt="">
		</div>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
					<form class="login100-form validate-form" action="../../Controllers/inscriptionController.php" method="post">
						<span class="login100-form-title p-b-49">
							Inscription <br>
						</span>

						<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
							<span class="label-input100">Pseudo</span>
							<input class="input100" type="text" name="name" placeholder="Entrer votre nom">
							<span class="focus-input100" data-symbol="&#xf206;"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-23" data-validate="UserEmail is required">
							<span class="label-input100">Email</span>
							<input class="input100" type="text" name="email" placeholder="Entrer votre Email">
							<span class="focus-input100" data-symbol="&#x2709;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="mdp" placeholder="Entrer votre mot de passe">
							<span class="focus-input100" data-symbol="&#xf190;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<span class="label-input100">Confirm Password</span>
							<input class="input100" type="password" name="mdp2" placeholder="Entrer votre mot de passe">
							<span class="focus-input100" data-symbol="&#xf190;"></span>
						</div>

						<div class="text-right p-t-8 p-b-31">

						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" type="submit" name="inscription">
									S'inscrire
								</button>
							</div>
						</div>
						<div class="txt1 text-center p-t-54 p-b-20">
							<span>
								<a href="log-In.php">Se connecter</a>
							</span>
						</div>

				</div>
				<div class="flex-col-c p-t-155">

				</div>
				</form>
			</div>
		</div>
	</div>

	</div>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>