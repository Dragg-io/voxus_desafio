<?php
	include_once "php/functions/functions_Aux.php";
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Desafio PHP | Voxus</title>
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/login/style.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>
	<body>
		<section id="loginPanel">
			<form method="POST" action="php/login/verifyLogin.php">
				<label>
					<p>Email</p>
					<input type="email" name="email" required>
				</label>
				<label>
					<p>Senha</p>
					<input type="password" name="pass" required>
				</label><br>
				<button>Entrar</button>
			</form>
			<span><?php message('error_Login');?></span>
		</section>
	</body>
</html>
